import { EleventyHtmlBasePlugin } from '@11ty/eleventy'
import { DateTime } from 'luxon'
import pluginWebc from '@11ty/eleventy-plugin-webc'
import pluginSyntaxHighlight from '@11ty/eleventy-plugin-syntaxhighlight'
import { eleventyImagePlugin } from '@11ty/eleventy-img'
import pluginTailwind from './eleventy.config.tailwind.js'
import crypto from 'crypto'
import fs from 'fs'
import path from 'path'
import url from 'url'

export default async function (eleventyConfig) {
  eleventyConfig.ignores.add('./README.md')

  eleventyConfig.addPassthroughCopy('fonts')
  eleventyConfig.addPassthroughCopy('img')
  eleventyConfig.addPassthroughCopy('favicon.ico')
  eleventyConfig.addPassthroughCopy('favicon.svg')

  eleventyConfig.addFilter('readableDate', dateObj => {
    return DateTime.fromJSDate(dateObj, { zone: 'UTC' }).toLocaleString(DateTime.DATE_FULL);
  })

  let cache = {}

  eleventyConfig.addFilter('nocache', str => {
    if (cache[str]) {
      return cache[str]
    }

    let id = crypto.createHash('sha1')
      .update(fs.readFileSync(path.dirname(url.fileURLToPath(import.meta.url)) + str, 'utf8'))
      .digest('hex')

    cache[str] = str + '?id=' + id

    return cache[str]
  })

  eleventyConfig.addFilter('hash', str => {
    return Buffer.from(str).toString('hex').slice(0, 5).toUpperCase()
  })

  eleventyConfig.addFilter('hostname', str => {
    return (new URL(str)).host.replace('www.', '')
  })

  // Add support for layout sections/blocks
  // https://github.com/11ty/eleventy/issues/853
  eleventyConfig.addPairedShortcode('section', function (content, name) {
    if (!this.page.sections) this.page.sections = {}
    this.page.sections[name] = content

    return ''
  })

  eleventyConfig.addPlugin(EleventyHtmlBasePlugin)

  eleventyConfig.addPlugin(pluginTailwind);

  eleventyConfig.addPlugin(pluginSyntaxHighlight, {
    preAttributes: {
      'tabindex': '0'
    }
  })

  eleventyConfig.addPlugin(pluginWebc, {
    components: [
      './_components/**/*.webc',
      'npm:@11ty/eleventy-img/*.webc',
    ],
  })

  eleventyConfig.addPlugin(eleventyImagePlugin, {
    formats: ['avif', 'jpeg'],
    urlPath: '/img/',

    defaultAttributes: {
      loading: 'lazy',
      decoding: 'async'
    }
  })

  eleventyConfig.setServerOptions({
    domDiff: false
  })

  return {
    markdownTemplateEngine: 'njk',
    htmlTemplateEngine: "njk",
  }
}
