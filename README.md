# sedsucsd.org
This is a refresh of the SEDS UCSD site. It's a facelist with cleaner, more modern styling for the existing site. Future versions will be built (with PHP) in artemis' internal CMS.

### structure
+ .git/
+ about/
	+ contact
	+ gallery
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
	+ aurora
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
	+ aurora
	+ business
	+ colossus
	+ propulsion
	+ triteia
	+ vulcan
	+ vulcan2
+ vulcan (redirect to `projects/vulcan`)
+ 404.html
+ README.md
+ index.html
+ notfound.html

### TODO
+ image hosting somewhere else?
+ change hardcoded site links to file paths (e.g. `https://sedsucsd.org/about/seds/` to `/about/seds`)
+ deploy script
+ update officers page
+ [templatize everything](https://medium.com/@AmyScript/how-to-reduce-reuse-and-recycle-your-code-389e6742e4ac)
+ make public, add to [SEDS@UCSD GH org](https://github.com/SEDS-Software)
+ update Colossus page
	+ look into Sketchfab model embed
	+ videos of hotfire(s), maybe cold flows and development timeline
	+ relevant news and social feed
	+ related documents e.g. project proposal, SOP, Colossus paper
+ update members page
	+ change the LinkedIn icons to the font-awesome SVGs
+ fix `/projects/engines` height attributes in engine tables and Ignus-1 text getting cut off
+ `/launch`? redirect to `projects/vulcan`?
+ standardize style
	+ trailing whitespace
	+ those carriage returns
	+ spaces to tabs (or at least not a mix of both)
