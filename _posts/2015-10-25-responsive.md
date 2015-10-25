---
layout: post
title: "responsive is the new standard..."
date: 2015-10-25
comments: true
---
... and has been, for quite awhile now. 

Responsive web design, if you are unfamiliar with the term, basically means that your website will scale to any screen, and look good (or at least the way you have intended it to) on any device. This has become the standard in the industry, given the plethora of mobile devices currently flooding the market. 

There is something to be said against a separate mobile website. Creative Bloq talked about that in a great [article](http://www.creativebloq.com/responsive-web-design/build-basic-responsive-site-css-1132756) on responsiveness that includes a nifty little demo. Mobile sites have a misfortune of being scaled down versions with limited features and often unfriendly interfaces. Difficulty of use to the intended audience can only be matched by  developer's frustrations - adjusting content and maintaining two different codebases makes for a headache. And you cannot get away with a mobile unfriendly site these days, due to Google's ranking algorithms that favour the mobile friendly. The Mobile-geddon has been a very real thing earlier this year, and much [talked about](http://fortune.com/2015/04/20/google-website-mobile-friendly/) on multiple news sources. Though, Google has not left web developers stranded, and provided some good [overviews](https://developers.google.com/web/fundamentals/design-and-ui/responsive/fundamentals/?hl=en) on responsiveness. There is even a [Mobile Friendly Test](https://www.google.com/webmasters/tools/mobile-friendly/?utm_source=wmc-blog&utm_medium=referral&utm_campaign=mobile-friendly) you can utilize to check any URL. Googlebot will analyze the site and list any problems it might see, such as text being too small, links being too close, or any blocked content. (Also known as all the things that I have to fix with this blog. Thank you, Googlebot!)
Responsiveness comes as a saviour to the mobile friendly design.

Some key features of responsive design include:

### 1. Mobile first approach.
Consider small devices first and create your foundation with the smaller resolution in mind. Once all the main features are taken care of, start scaling it up and moving things around to take advantage of larger screens. [Making a Case for Mobile First Designs](http://www.sitepoint.com/making-case-mobile-first-designs/) is a quick and convincing read on the importance of the concept.

### 2. Media queries.
Basically, media queries is how you will differentiate between the different devices and capture the screen width. This is essential for Step 1.  Remember to set your viewport and size your content to it. [Here](http://learn.shayhowe.com/advanced-html-css/responsive-web-design/) is a great tutorial on how to actually accomplish this.

### 3. Using relative units.
If the units are relative, scaling up and down should not be a problem at all. There are percentages of course, em (the height of the element's font = 16px) and rem (root em: the pixel size rem translates to depends on the font size of the "root" element of the page, html element). This includes whitespace - padding and margins, though you can get away with pixels very often. 

### 4. Skipping content and page anchors.
This makes for better user experience, especially on a smaller device where you would have to scroll a lot. Remember to make your anchor tags relevant to your page, since the words contained in the anchor text impact the ranking that the page will receive by search engines. 

Take a look at my [projects page](http://dostap.github.io/projects/) to see an example of a responsive portfolio website. 
