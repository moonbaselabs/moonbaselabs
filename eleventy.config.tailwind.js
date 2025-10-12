import fs from 'fs'
import path from 'path'

import cssnano from 'cssnano'
import postcss from 'postcss'
import tailwindcss from '@tailwindcss/postcss'

export default function (eleventyConfig) {
  eleventyConfig.on('eleventy.before', async () => {
    let input = './css/main.css'
    let output = './_site/css/main.css'

    let css = fs.readFileSync(input)
    let result = await postcss([
      tailwindcss(),
      cssnano({ preset: 'default' }),
    ]).process(css, {
      from: input,
    })

    let dir = path.dirname(output)
    if (!fs.existsSync(dir)) {
      await fs.promises.mkdir(dir, { recursive: true })
    }
    fs.writeFileSync(output, result.css)
    console.log(`[PostCSS] Compiled Tailwind.`)
  })
}
