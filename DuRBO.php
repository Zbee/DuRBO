<?php
require_once("phpQuery.php");

function handleUTF8 ($code) {
  return preg_replace_callback('/[\x{80}-\x{10FFFF}]/u', function($match) {
    list($utf8) = $match;
    $entity = mb_convert_encoding($utf8, 'HTML-ENTITIES', 'UTF-8');
    return $entity;
  },
  $code);
}

function saniXML ($xml) {
  $xml = str_replace("&", "", $xml);
  $xml = handleUTF8($xml);
  return $xml;
}

$url = "http://www.osubeatmaps.com/en/listing/0/0/1/";

$page = file_get_contents($url);

phpQuery::newDocument($page);

$xml = new SimpleXMLElement("<rss version=\"2.0\" />");
$channel = $xml->addChild("channel");
$channel->addChild("title", "DuRBO");
$channel->addChild(
  "description",
  "DuRBO allows osu! players to download new beatmaps automagically"
);
$channel->addChild("lastBuildDate", date(DATE_RFC2822, time()));
$channel->addChild("pubDate", date(DATE_RFC2822, time()));
$channel->addChild("link", "http://zbee.me/durbo/DuRBO.php");

$atomlink = $channel->addChild("link", "", "http://www.w3.org/2005/Atom");
$atomlink->addAttribute("href", "http://zbee.me/durbo/DuRBO.php");
$atomlink->addAttribute("rel", "self");
$atomlink->addAttribute("type", "application/rss+xml");

$maps = pq(".listing_content");

foreach($maps["> .listing_item"] as $map) {
  $bm = $channel->addChild("item");

  $id = pq($map)->find(".listing_img_link")->attr("href");
  $id = explode("/", $id);
  $id = $id[count($id)-2];
  $id = saniXML($id);

  $guid = saniXML("http://www.osubeatmaps.com/en/" . $id);
  $guid = $bm->addChild("guid", $guid);
  $guid->addAttribute("isPermaLink", "false");

  $title = saniXML(pq($map)->find(".item_title")->text());
  $artist = saniXML(pq($map)->find(".item_artist")->text());

  $link = "http://dl.osubeatmaps.com/"
    . rawurlencode($id . " " . $artist . " - " . $title . ".osz");
  $bm->addChild("link", $link);

  $bm->addChild("description", $artist . " - " . $title);
  $bm->addChild("title", $title);
}

Header('Content-type: application/rss+xml');
print($xml->asXML());
