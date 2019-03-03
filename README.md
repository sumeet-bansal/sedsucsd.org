# sedsucsd.org
This is the official website of SEDS UCSD.

### Structure
+ about/
	+ contact
	+ officers
	+ SEDS
+ apply
+ assets/
	+ blocks/
	+ css/
	+ files/
	+ fonts/
	+ images/
	+ js/
	+ php/
	+ rs-plugin/
+ colossus (redirect to `projects/colossus`)
+ cubesat (redirect to `projects/triteia`)
+ donate
+ launch
+ projects/
	+ argo
	+ colossus
	+ engines
	+ triteia
	+ vulcan
	+ vulcan2
+ spacevision/
	+ code-of-conduct
	+ images/
	+ js/
	+ registration
+ sponsors
+ teams/
	+ alumni
	+ argo
	+ business
	+ colossus
	+ propulsion
	+ triteia
	+ vulcan
	+ vulcan2
+ vulcan (redirect to `projects/vulcan`)
+ 404.html
+ index.html
+ notfound.html

### Code and Build
Don't let the random PHP blocks fool you; the site is very much a basic static one with plain HTML/JS/CSS so there isn't really a "build" procedure per se, although you can always run a local HTTP server (I personally use `python3 -m http.server`) to see how it'll appear in production.

### Deployment
To deploy to the DigitalOcean droplet, follow the instructions [here](https://www.digitalocean.com/community/tutorials/how-to-set-up-automatic-deployment-with-git-with-a-vps):
```bash
git remote add prod ssh://user@165.227.56.100/var/repo/site.git
git push prod master
```

To push to the GitHub repo and the DigitalOcean droplet simultaneously, follow the instructions [here](https://stackoverflow.com/questions/14290113/git-pushing-code-to-two-remotes):
```bash
git remote add prod https://github.com/sumeet-bansal/sedsucsd.org
git remote set-url --add --push prod ssh://user@165.227.56.100/var/repo/site.git
git remote set-url --add --push prod https://github.com/sumeet-bansal/sedsucsd.org
git push prod master
```

To set this new simultaneous deployment remote as the default for `git push`:
```bash
git push -u prod master
```

Make sure fetches always come from the GitHub repo, not the droplet.

### TODO
+ image hosting somewhere else? e.g. Firebase
+ change hardcoded site links to file paths (e.g. `https://sedsucsd.org/about/seds/` to `/about/seds`)
+ [templatize everything](https://medium.com/@AmyScript/how-to-reduce-reuse-and-recycle-your-code-389e6742e4ac) or migrate the entire site to React
	+ head
	+ navbar
	+ footer
+ make public, add to [SEDS@UCSD GH org](https://github.com/SEDS-Software)
+ update Colossus page
	+ look into Sketchfab model embed
	+ videos of hotfire(s), maybe cold flows and development timeline
	+ relevant news and social feed
	+ related documents e.g. project proposal, SOP, Colossus paper
+ update members page
	+ change the LinkedIn icons to the font-awesome SVGs
+ fix `/projects/engines` height attributes in engine tables and Ignus-1 text getting cut off
+ sort sponsors by project