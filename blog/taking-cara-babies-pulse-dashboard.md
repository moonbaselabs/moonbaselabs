---
title: "Building a Pulse Dashboard for Taking Cara Babies"
description: How we distilled the most important metrics driving Taking Cara Babies into a simple dashboard. 
date: 2024-02-05
image: /img/blog/process.jpg
tags: [tcb]
author: Ted Kriwiel
---

We've built several dashboards for Taking Cara Babies, but this is probably my favorite. The Taking Cara Babies team wanted the ability to follow the most important metrics for their company over time.

## Selecting the metrics
After a few discussions, we settled on the following metrics as the most critical ones to monitor:

- Revenue
- Users of the website
- Conversion Rate

We used a thirty-day moving average for all the metrics for several reasons. First of all, they wanted to see the trends at a glance. We've created other charts focused on weekly or monthly metrics, which are helpful but often obscure trends over time. A chart may say we are "Down 2% month over month,” but if it’s February, you might excuse this because it has three fewer days than January. Or, a month may have five Sundays instead of four. These calendar nuances make month-over-month comparisons more difficult. Instead, we focused on the thirty-day average. It charts into a simple line and allows users to see the trend at a glance.

## Selecting the dimensions
Once we established the dataset (Stripe and GA4 data), we stepped through how Taking Cara Babies might use the data to drive action. Their company is heavily focused on marketing so we broke the metrics into three categories:

- Overall
- By marketing channel
- By product group

These breakouts allow the Taking Cara Babies team to provide a robust feedback loop to each of the marketing channels and guide the focus of content creation across their three product lines.

These nine charts allow Taking Cara Babies to keep a pulse of their company every week.

Watch the video to see a walk-through of the dashboard.

<figure>
   <div style="position: relative; padding-bottom: 68.54304635761589%; height: 0;"><iframe src="https://www.loom.com/embed/c4ee218f501b471f90512039cfa7f431?sid=996ff92d-7fb7-4e89-98f7-0e326c2b4e62?hide_owner=true&hide_share=true&hide_title=true&hideEmbedTopBar=true" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe></div>
</figure>