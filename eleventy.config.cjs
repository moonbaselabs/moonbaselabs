const { DateTime } = require('luxon')
const pluginWebc = require('@11ty/eleventy-plugin-webc')
const pluginSyntaxHighlight = require('@11ty/eleventy-plugin-syntaxhighlight')
const { eleventyImagePlugin } = require('@11ty/eleventy-img')
const pluginRss = require("@11ty/eleventy-plugin-rss")
const postcss = require('postcss')

module.exports = async function (eleventyConfig) {
    const { EleventyHtmlBasePlugin } = await import('@11ty/eleventy')

    eleventyConfig.ignores.add('./README.md')

    eleventyConfig.addPassthroughCopy('fonts')
    eleventyConfig.addPassthroughCopy('img')
    eleventyConfig.addPassthroughCopy('favicon.ico')
    eleventyConfig.addPassthroughCopy('favicon.svg')

    eleventyConfig.addFilter('readableDate', dateObj => {
        return DateTime.fromJSDate(dateObj, { zone: 'UTC' }).toLocaleString(DateTime.DATE_FULL);
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
    eleventyConfig.addPlugin(pluginRss)

    eleventyConfig.addPlugin(pluginSyntaxHighlight, {
        preAttributes: {
            'tabindex': '0'
        }
    })

    eleventyConfig.addTemplateFormats('css')

    eleventyConfig.addExtension('css', {
        outputFileExtension: "css",

        compile: async function (content, path) {
            let result = await postcss([
                require('autoprefixer'),
                require('tailwindcss'),
                require('cssnano'),
            ]).process(content, { from: path })

            // This is the render function, `data` is the full data cascade
            return async (data) => {
                return result.css;
            }
        }
    });

    eleventyConfig.addPlugin(pluginWebc, {
        components: [
            './_components/**/*.webc',
            'npm:@11ty/eleventy-img/*.webc',
        ],
    })

    eleventyConfig.addPlugin(eleventyImagePlugin, {
        formats: ['webp', 'jpeg'],
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
