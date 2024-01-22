# Moonbase Labs

## Setup

1. Install NPM dependencies:

```sh
npm install
```

2. Start the dev server:

```sh
npm run start
```
The `start` command will output the port address where the website is running (it's [http://localhost:8080/](http://localhost:8080/) by default).

The website will automatically rebuild and refresh as you save files.

Press `ctrl + c` to stop the dev server.

## Content

Blog posts and case studies exist as Markdown files.

Blog posts live inside the `blog` directory. Copy one of the existing `.md` files and update the front matter data (the stuff between the `---`’s, at the top) to start a new draft.

Case studies live inside the `missions` directory. Copy one of the existing `.md` files and update the front matter data (the stuff between the `---`’s, at the top) to start a new draft.

## Styling

The website is styled with Tailwind CSS you may occasionally have to restart the dev server for Tailwind to recognize and compile new CSS class names.
