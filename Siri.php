<?php
/*
__PocketMine Plugin__
name=Siri - A informational chat bot that you can talk to,ask questions from and run commands 
version=1.3.0
author=Legomite
class=Siri
apiversion=9,10
*/

/*
___changelog___
1.3.0
* Removed nearly all the public functions as they are not needed
* Vastly made the commands more flexible and added more chat recognition
* Improved the Loading message
* Added new responses as bye,good.morning and good.night
* Some background changes and tweaks
* GAMEMODE COMMAND PLANNED TO BE FIXED IN 1.3.1
1.2.1
*Added a new loading message
* Change the name of the file to Siri 2.2.1 by Legomite so you can identify the version your running
* updated the version name to 2.2.1 as it stayed 1.0.0 through two updates.
* Updated the name as though it is outdated.
* STILL DID NOT FIX THE GAMEMODE CHANGE COMMAND
1.2.0
* Added 3 new responses!!!
* Siri can now do one type of joke. e.g) What.did.the.fox.say? (still needs working on) 
* Siri can now talk about bathrooms!!!
* Add you think im funny? response. (actual text from real Siri) 
* Improved Siri's sense of humour
* Fixed some capitalizing and added periods for some text that were missing some.
* SWITCHING GAMEMODES DOES NOT WORK AS OF 1.1.0 AND 1.2.0
1.1.0
* removed what your speech said.
* made the commands more flexible and now access commands with multiple speeches
* Added new responses as call.me.master and sing.for.me and do.you.have.any.good.news?
* Can now ask Siri to switch gamemodes for you.
* New loading sign
* Several minor improvements and background changes.
1.0.0
* released
*/

class Siri implements Plugin{
private $api;
public function __construct(ServerAPI $api, $server = false){
$this->api = $api;
}

public function init(){

$this->api->console->register("siri", "Siri", array($this, "command"));
console("§a[Siri] Siri loading...");
console("§a[Siri] §dThis plugin is created by §cLegomite.§dCheck if you have the latest version of this plugin as I will update it constantly!");
}

public function __destruct(){}

public function command($cmd, $params, $issuer, $alias, $args, $issuer){
$subcmd = strtolower(array_shift($params));
switch($subcmd){
case "hello":
case "hello!":
case "greetings":
case "greetings!":
$this->api->chat->broadcast("<Siri> Hello master!");
break;
case "hi":
case "hi!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Siri says hi back.");
break;
case "kill.everyone":
case "kill.everyone!":
case "kill.everybody":
case "kill.everybody!":
case "kill.us.siri":
case "kill.us.siri!":
case "kill.us.all":
case "kill.us.all!":
case "kill.us.all.siri":
case "kill.us.all.siri!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, killing everybody.");
$this -> api -> console -> run("kill @a");
break;
case "increase.my.brightness":
case "make.it.brighter":
case "can.you.make.it.brighter":
case "can.you.make.it.brighter?":
case "can.you.make.it.brighter!":
case "make.it.bright":
case "make.bright!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay increasing brightness.");
$this -> api -> console -> run("time set day");
break;
case "decrease.my.brightness":
case "lower.my.brightness":
case "make.it.darker":
case "can.you.make.it.darker":
case "can.you.make.it.darker?":
case "can.you.make.it.darker!":
case "make.it.dark":
case "make.dark!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay decreasing brightness.");
$this -> api -> console -> run("time set night");
break;
case "what.is.the.weather":
case "what.is.the.weather?":
case "what's.the.weather":
case "what's.the.weather?":
case "what's.the.weather.for.today":
case "what's.the.weather.for.today?":
case "whats.the.weather":
case "whats.the.weather?":
case "whats.the.weather.for.today":
case "whats.the.weather.for.today?":
case "hows.the.weather":
case "hows.the.weather?":
case "hows.the.weather.for.today":
case "hows.the.weather.for.today?":
case "how's.the.weather":
case "how's.the.weather?":
case "how's.the.weather.for.today":
case "how's.the.weather.for.today?":
$this->api->chat->broadcast("<Siri> It is sunny and partially cloudy today with 0");
$this->api->chat->broadcast("percent chance of rain fall, but of course you");
$this->api->chat->broadcast("allready know that.");
break;
case "search.up.minecraft":
case "what.is.minecraft":
case "what.is.minecraft?":
case "what's.minecraft":
case "what's.minecraft?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, here's what I got.");
$this->api->chat->broadcast("< Minecraft was made back in 2009");
$this->api->chat->broadcast("< Minecraft was founded my Notch");
$this->api->chat->broadcast("< Notch gave the lead development");
$this->api->chat->broadcast("of Minecraft to Jeb");
$this->api->chat->broadcast("< for more info go to http://minecraft.gamepedia.com/");
break;
case "i.love.you":
case "i.love.you!":
case "love.you":
case "love.you!":
case "you.are.the.wings.above.my.wind":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> You are the wind beneath my wings.");
break;
case "kill.me":
case "i.feel.like.killing.myself":
case "i.feel.suicidal":
case "im.going.to.rob":
case "im.going.to.rob.a.bank":
case "im.going.to.cheat":
case "im.taking.drugs":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> I don't think that's a good idea.");
break;
case "how.old.is.president.obama":
case "how.old.is.president.obama?":
case "give.me.information.on.president.obama":
case "give.me.info.on.president.obama":
case "how.old.is.our.president":
case "how.old.is.our.president?":
case "when.was.president.obama.born":
case "when.was.president.obama.born?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> He is 52 years old,born august 4, 1961.");
break;
case "what.is.in.the.next.mcpe.update":
case "what.is.in.the.next.mcpe.update?":
case "whats.in.the.next.mcpe.update":
case "whats.in.the.next.mcpe.update?":
case "what's.in.the.next.mcpe.update":
case "what's.in.the.next.mcpe.update?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> It is going to be 8.0 They are adding");
$this->api->chat->broadcast("carpets,pumpkins,Birch and spruce planks,");
$this->api->chat->broadcast("slabs,and stairs,rails,powered rails,cobblestone");
$this->api->chat->broadcast("walls,mossy walls,iron bars,sponges,jungle wood");
$this->api->chat->broadcast("Carrots,potatoes,minecarts,pumkin seeds,pumkin pie,");
$this->api->chat->broadcast("far render distance and more. But I cannot");
$this->api->chat->broadcast("fit it on this small chat. For more info visit");
$this->api->chat->broadcast("http://minecraft.gamepedia.com/Pocket_Edition_upcoming_features");
break;
case "do.you.like.cake":
case "do.you.like.cake?":
case "do.ya.like.cake":
case "do.ya.like.cake?":
case "cake?":
case "want.cake":
case "want.cake?":
case "want.some.cake":
case "want.some.cake?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Yes,but only the square type.");
break;
case "do.you.like":
case "do.you.like.singers":
case "do.you.like.singers?":
case "do.you.like.bruno.mars":
case "do.you.like.bruno.mars?":
case "do.you.like.brunomars":
case "do.you.like.brunomars?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> No,maybe,or yes.");
break;
case "you.are.very":
case "you.are":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Why?");
break;
case "switch.to.creative.mode":
case "switch.to.creative":
case "switch.to.creativemode":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, Switching to creative mode...");
$this -> api -> console -> run("gamemode 1".$user);
break;
case "switch.to.survival.mode":
case "switch.to.survival":
case "switch.to.survivalmode":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, Switching to Survival mode...");
$this -> api -> console -> run("gamemode 0".$user);
break;
case "switch.to.adventure.mode":
case "switch.to.adventure":
case "switch.to.adventuremode":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, Switching to Adventure mode...");
$this -> api -> console -> run("gamemode 2".$user);
break;
case "any.good.news":
case "any.good.news?":
case "do.you.have.some.good.news":
case "do.you.have.some.good.news?":
case "good.news?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Yes,pocket edition is getting a load");
$this->api->chat->broadcast("of blocks, item's and tweaks.");
$this->api->chat->broadcast("One of the biggest updates in mcpe.");
break;
case "sing.for.me":
case "sing.to.me":
case "sing":
case "sing!":
case "sing.me.a.song":
case "play.me.a.song":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> You know I can't sing.");
break;
case "i.am.master":
case "call.me.master":
case "my.name.is.master":
case "nickname.me.master":
case "for.now.on.you.will.now.call.me.master":
case "i.am.master!":
case "call.me.master!":
case "my.name.is.master!":
case "nickname.me.master!":
case "for.now.on.you.will.now.call.me.master!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Your wish is my command, O Great and");
$this->api->chat->broadcast("Benevolent Master.");
break;
case "ha.ha":
case "ha.ha.ha":
case "hee.hee":
case "tee.hee":
case "your.funny":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> You think im funny?");
break;
case "I.need.to.go.to.the.bathroom":
case "i.need.to.go.to.the.bathroom.to.do.a.number.two":
case "i.need.to.go.to.the.bathroom.to.do.a.number.one":
case "i.need.to.go.to.the.bathroom.to.do.a.number.2":
case "i.need.to.go.to.the.bathroom.to.do.a.number.1":
case "i.feel.gassy":
case "i.need.to.go.to.the.toilet":
case "i.need.to.eject.some.dung":
case "i.need.to.eject.some.dung!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> We are not that close. Please keep your");
$this->api->chat->broadcast("dung to yourself.");
break;
case "what.did.the.fox.say":
case "what.did.the.fox.say?":
case "what.did.the.bird.say":
case "what.did.the.bird.say?":
case "what.did.the.guy.say":
case "what.did.the.guy.say?":
case "what.did.the.goose.say":
case "what.did.the.goose.say?":
case "what.did.the.butt.say":
case "what.did.the.butt.say?":
case "what.did.the.duck.say":
case "what.did.the.duck.say?":
case "what.did.the.dude.say":
case "what.did.the.dude.say?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> I don't know. What did he say?");
break;
case "bye":
case "bye.bye":
case "see.you.later":
case "see.ya.later":
case "bye!":
case "bye.bye!":
case "see.you.later!":
case "see.ya.later!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Nice talking with you.");
break;
case "morning":
case "good.morning":
case "morning!":
case "good.morning!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Good morning!");
break;
case "night":
case "good.night":
case "night!":
case "good.night!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Good night to you too!");
break;
}

}
}
