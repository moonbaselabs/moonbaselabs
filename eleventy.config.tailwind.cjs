const postcss = require('postcss')
const fs = require('fs')
const path = require('path')

module.exports = function (eleventyConfig) {
    // Process when files change
    eleventyConfig.on('eleventy.before', async () => {
        let input = './css/main.css'
        let output = './_site/css/main.css'

        let css = await fs.promises.readFile(input)
        let result = await postcss([
            require('autoprefixer'),
            require('tailwindcss'),
            require('cssnano'),
        ]).process(css, {
            from: input,
        })

        let dir = path.dirname(output)
        if (!fs.existsSync(dir)) {
            await fs.promises.mkdir(dir, { recursive: true })
        }
        await fs.promises.writeFile(output, result.css)
        console.log(`[PostCSS] Compiled Tailwind.`)
    })

    // Process when templates change
    // eleventyConfig.addTemplateFormats('css')
    // eleventyConfig.addExtension('css', {
    //     outputFileExtension: "css",
    //     compile: async function (content, path) {
    //         let result = await postcss([
    //             require('autoprefixer'),
    //             require('tailwindcss'),
    //             require('cssnano'),
    //         ]).process(content, { from: path })

    //         console.log(`[PostCSS] Compiled Tailwind.`)

    //         // This is the render function, `data` is the full data cascade
    //         return async (data) => {
    //             return result.css
    //         }
    //     }
    // })
}
