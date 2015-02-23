# DuRBO [![Valid RSS](http://validator.w3.org/feed/images/valid-rss-rogers.png)](http://validator.w3.org/feed/check.cgi?url=http%3A//zbee.me/durbo/DuRBO.php)
Download Ranked Beatmaps for Osu!

[Osu!](https://osu.ppy.sh/) is a very fun game, however to keep playing you want to download [beatmaps](https://osu.ppy.sh/p/beatmaplist).
You can go and look through beatmaps and pick the ones that look good, but why put in that much effort? What if instead you could just have [IFTTT](https://ifttt.com) do the work for you, and download new, top ranked beatmaps straight to the game?

The reason why you have to put in that much effort is because beatmaps for osu! do not have any sort of feed IFTTT can check for updates.

DuRBO seeks to change that by acting as a middleman for osu! and IFTTT. DuRBO will - when the DuRBO page is loaded - generate an xml document of the current [ranked beatmaps](http://www.osubeatmaps.com/en/listing/0/0/1/) allowing IFTTT to check something and download beatmaps straight to your game.

## IFTTT Recipes
To use DuRBO, you will need to use or at least have one of the following services (Dropbox, Drive, Box) and have your osu! distribution in the specified folder for each service.

[![IFTTT Recipe](https://i.imgur.com/EVfqRhu.png)](https://ifttt.com/view_embed_recipe/262301-download-osu-beatmaps)

`Apps/osu/`

[![IFTTT Recipe](https://i.imgur.com/c95xJ4I.png)](https://ifttt.com/view_embed_recipe/262303-download-osu-beatmaps)

`Games/osu/`

[![IFTTT Recipe](https://i.imgur.com/1ACGaaF.png)](https://ifttt.com/view_embed_recipe/262306-download-osu-beatmaps)

`Games/osu/`

## Todo list
- [ ] If a user is specified, remove items that they have already seen before

## Licensing
Copyright 2015 Ethan Henderson.

[![GPLv3](https://www.gnu.org/graphics/gplv3-127x51.png)](http://www.gnu.org/copyleft/gpl.html)
See the [`LICENSE`](https://github.com/Zbee/DuRB/blob/master/LICENSE) file for the text of this license.

Utilizes [phpquery](https://github.com/TobiaszCudnik/phpquery).

> Copyright (c) Tobiasz Cudnik &lt;tobiasz.cudnik/gmail.com>

> MIT License
