---
extends: _layouts.post
title: Oldest
description: This is how you Markdown
date: 2018-10-19
tags: [development]
author: Christian Taylor
---

All blog posts and case studies on this website are written in Markdown. The following is a quick explainer on the Markdown syntax.

## What is Markdown?

Markdown is a lightweight markup language with plain-text-formatting syntax. It's goal is to enable people "to write using an easy-to-read and easy-to-write plain text format, optionally convert it to structurally valid XHTML (or HTML)".

## What is the syntax?

What follows is an explaination of some basic markdown syntax. Each section includes a live example followed by the code snippet.

### Paragraphs

Every new line of text in your Markdown file creates a new paragraph:

I'm just a plain 'ol paragraph.

```
I'm just a plain 'ol paragraph.
```

### Headings

Headings are marked up with `#`s. Heading Level 1 is the largest and Heading Level 6 is the smallest.

*Sorry, I'm not including a heading example because it'll ruin the clarity and formatting of this article.*

```
# Heading Level 1
## Heading Level 2
### Heading Level 3
#### Heading Level 4
##### Heading Level 5
###### Heading Level 6
```

### Text

*Italic text*
```
*Italic text*
```

**Bold text**
```
**Bold text**
```

### Lists

Numbered lists are straight forward:

1. Numbered
2. Lists
3. Look like this

```
1. Numbered
2. Lists
3. Look like this
```

...and so are bulleted lists:

- This is
- a bulleted
- list

```
- This is
- a bulleted
- list
```

### Hyperlinks

Here's a link:

[Moonbase Labs](https://moonbaselabs.com)
```
[Moonbase Labs](https://moonbaselabs.com)
```
***Pro Tip:** If you imagine that you're drawing a button it makes remembering the link syntax easiser `[button text](where it points)`.*

### Images

Finally, the image syntax is just like a link, but more exciting!

![Moonbase Labs logo](/assets/svg/logo.svg)

```
![Moonbase Labs logo](/assets/svg/logo.svg)
```

## The End

And that's a wrap, you're a certified Markdown professional now. There are a few more less common syntaxes you can build in markdown you can find more info at [https://www.markdownguide.org/cheat-sheet/](https://www.markdownguide.org/cheat-sheet/).
