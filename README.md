# Moonbase Labs

## Setup

Clone this repo
```
cd ~/Sites
git clone https://github.com/moonbaselabs/moonbaselabs.git
cd moonbaselabs
```
Install Composer packages
```
composer install
```

Install NPM packages
```
npm install
```

Generate the website

```
npm run watch
```

## Updating the Website

As long as `npm run watch` is running in your console file changes will trigger the website to rebuild.

### Adding a Blog Post

Add a new markdown (`.md`) file to the `/source/_posts` directory. The name of the file corresponds to the page URL (`new-post.md` will show up at `moonbaselabs.com/blog/new-post`).

Add the post frontmatter to the top of the new `.md` file.
```
---
extends: _layouts.post
title:
description:
date: 2020-10-19
tags: []
author:
---
```
Check out other post files in the `/source/_projects` directory to get a sense for how the frontmatter is used.

Check out the **"How to Format a Markdown Post"** article on the working website for tips on writting your first Markdown document.

### Adding a Case Study

Add a new markdown (`.md`) file to the `/source/_projects` directory. The name of the file corresponds to the page URL(`new-project.md` will show up at `moonbaselabs.com/case-studies/new-project`).

Any images for this project should be added to the `/source/assets/images/projects` directory.

Add the project frontmatter to the top of the new `.md` file.
```
---
extends: _layouts.project
title:
description:
date: 2020-10-19
services: []
client:
url:
image: /assets/images/projects/<image file>
---
```

Check out other project files in the `/source/_projects` directory to get a sense for how the frontmatter is used.

Check out the **"How to Format a Markdown Post"** article on the working website for tips on writting your first Markdown document.
