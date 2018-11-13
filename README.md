# Jackalope: LEGACY

This is the first WP theme I ever developed. It's a mess. Going to be updating and retooling it. Getting it on github to make retooling and deploying it easier.

To Do:

- [x] add gulp preprocessing support
- [ ] remove Case Study custom post type support
- [ ] Design front page to only feature blog and Projects posts.
  - [ ] Rework relationship between blogs and Project posts.
        `Should they be custom post types or should they just be posts separated by taxonomy/category? And if just by taxonomy why distringuish projects from posts at all? Maybe could just use a tag and have the Projects set off in their own section. The reason why I originally made Projects the way I did is because I wanted to give them a different structure but with Gutenberg I can hypothetically do any structure I want and it's better to keep things built within the post rather than using ACF.`
- [ ] update nav to only show blog and Projects
- [ ] Refactor SCSS and JS structure to use webpack or task runner.
- [ ] rework Galleries custom post type to be a Gutenberg block

Eventually:

- [ ] Rebuild frontend in React/Angular and hook into headless WP CMS using REST api (or Graph QL if it's mature enough)

```
Question? If I'm just going to rebuild stuff in React, why even bother with refactoring etc? Can I just ditch this theme?
```
