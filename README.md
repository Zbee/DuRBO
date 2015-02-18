# DuRB
[osu!](https://osu.ppy.sh/) is a very fun game, however to keep playing you want to download [beatmaps](https://osu.ppy.sh/p/beatmaplist).
You can go, and look through beatmaps and pick the ones that look good, but why put in that much effort? What if instead you could just have
[ifttt](https://ifttt.com) do the work for you, and download new, top ranked beatmaps straight to the game.

The reason why you have to put in that much effort is because beatmaps for osu! do not have any sort of feed ifttt can check for updates.

DuRB seeks to change that by acting as a middleman for osu! and ifttt. DuRB will - when the DuRB page is loaded - generate an xml document
of the current [ranked beatmaps](https://osu.ppy.sh/p/beatmaplist&s=4&r=0) allowing ifttt to check something and download beatmaps straight 
to your game.

## Caveats
- ifttt can check for updates to the xml document, or DuRB could just remove beatmaps that have been shown before. For this model to work, 
people would need to specify their user id when using DuRB. Instead of `example.com/DuRB.php` being the xml, it would be 
`example.com/DuRB.php?user=1704`
- Would need to use something like [phpquery](https://github.com/tobiaszcudnik/phpquery) to get the contents of the ranked beatmaps page.
- User's osu! distribution would need to live in their Dropbox folder.
