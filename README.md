# DuRBO
Download Ranked Beatmaps for Osu!

[osu!](https://osu.ppy.sh/) is a very fun game, however to keep playing you want to download [beatmaps](https://osu.ppy.sh/p/beatmaplist).
You can go and look through beatmaps and pick the ones that look good, but why put in that much effort? What if instead you could just have [IFTTT](https://ifttt.com) do the work for you, and download new, top ranked beatmaps straight to the game?

The reason why you have to put in that much effort is because beatmaps for osu! do not have any sort of feed IFTTT can check for updates.

DuRBO seeks to change that by acting as a middleman for osu! and IFTTT. DuRBO will - when the DuRBO page is loaded - generate an xml document of the current [ranked beatmaps](https://osu.ppy.sh/p/beatmaplist&s=4&r=0) allowing IFTTT to check something and download beatmaps straight 
to your game.

## Todo list
- Get data from osu! beatmaps page (default to the ranked beatmaps page, but let users specify a different one)
- Manipulate that data with phpquery into a usable array of information
- If a user is specified, remove items that they have already seen before
- Return XML which [IFTTT checks every 15 minutes or so](https://ifttt.com/wtf)
- Create recipe to check DuRBO and download beatmaps to dropbox

## Caveats
- Would need to use something like [phpquery](https://github.com/tobiaszcudnik/phpquery) to get the contents of the ranked beatmaps page.
- User's osu! distribution would need to live in their Dropbox folder.

## Licensing
Copyright 2015 Ethan Henderson.

[![GPLv3](https://www.gnu.org/graphics/gplv3-127x51.png)](http://www.gnu.org/copyleft/gpl.html)
See the [`LICENSE`](https://github.com/Zbee/DuRB/blob/master/LICENSE) file for the text of this license.

Utilizes [phpquery](https://github.com/TobiaszCudnik/phpquery).

> Copyright (c) Tobiasz Cudnik &lt;tobiasz.cudnik/gmail.com>

> MIT License
