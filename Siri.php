<?php
/*
__PocketMine Plugin__
name=Siri - A informational chat bot that you can talk to and run commands 
version=1.4.0
author=Legomite
class=Siri
apiversion=8,9,10
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
private $api, $path, $config;
public function __construct(ServerAPI $api, $server = false){
$this->api = $api;
}

public function init(){

$this->api->console->register("siri", "Siri", array($this, "command"));
console("§a[Siri] Siri loading...");
console("§a[Siri] 1.4.0 DEMO DO NOT BLAME ME FOR BUGS CRAFTING AND DATA VALUES STILL HAVE DOTS,THE REST DON"T.);
}

public function __destruct(){}

public function command($cmd, $params, $issuer, $alias, $args, $issuer){
$subcmd = implode(" ", $params);
switch($subcmd){
case "hello":
case "hello!":
case "greetings":
case "greetings!":
case "hola":
case "hola!":
case "saludos":
case "saludos!":
$this->api->chat->broadcast("<Siri> Hello master!");
break;
case "hi":
case "hi!":
case "¡Hola":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Siri says hi back.");
break;
case "kill everyone":
case "kill everyone!":
case "kill everybody":
case "kill everybody!":
case "kill us siri":
case "kill us siri!":
case "kill us all":
case "kill us all!":
case "kill us all siri":
case "kill us all siri!":
case "matar a todos":
case "matar a todos!":
case "matar a todos":
case "matar a todos!":
case "matarnos siri":
case "matarnos siri!":
case "matar a todos":
case "matar a todos!":
case "matarnos a todos siri":
case "matarnos a todos siri!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, killing everybody.");
$this -> api -> console -> run("kill @a");
break;
case "increase my brightness":
case "make it brighter":
case "can you make it brighter":
case "can you make it brighter?":
case "can you make it brighter!":
case "make it bright":
case "make bright!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay increasing brightness.");
$this -> api -> console -> run("time set day");
break;
case "decrease my brightness":
case "lower my brightness":
case "make it darker":
case "can you make it darker":
case "can you make it darker?":
case "can.you.make it darker!":
case "make it dark":
case "make dark!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay decreasing brightness.");
$this -> api -> console -> run("time set night");
break;
case "what is the weather":
case "what is the weather?":
case "what's the weather":
case "what's the weather?":
case "what's the weather for today":
case "what's the weather for today?":
case "whats the weather":
case "whats the weather?":
case "whats the weather for today":
case "whats the weather for today?":
case "hows the weather":
case "hows the weather?":
case "hows the weather for today":
case "hows the weather for today?":
case "how's the weather":
case "how's the weather?":
case "how's the weather for today":
case "how's the weather for today?":
$this->api->chat->broadcast("<Siri> It is sunny and partially cloudy today with 0");
$this->api->chat->broadcast("percent chance of rain fall, but of course you");
$this->api->chat->broadcast("already know that.");
break;
case "search up minecraft":
case "what is minecraft":
case "what is minecraft?":
case "what's minecraft":
case "what's minecraft?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, here's what I got.");
$this->api->chat->broadcast("< Minecraft was made back in 2009");
$this->api->chat->broadcast("< Minecraft was founded my Notch");
$this->api->chat->broadcast("< Notch gave the lead development");
$this->api->chat->broadcast("of Minecraft to Jeb");
$this->api->chat->broadcast("< for more info go to http://minecraft.gamepedia.com/");
break;
case "i love you":
case "i love you!":
case "love you":
case "love you!":
case "you are the wings above my wind":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> You are the wind beneath my wings.");
break;
case "kill me":
case "i feel like killing myself":
case "i feel suicidal":
case "im going to rob":
case "im going to rob a bank":
case "im going to cheat":
case "im taking drugs":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> I don't think that's a good idea.");
break;
case "how old is president obama":
case "how old is president obama?":
case "give me information on president obama":
case "give me info on president obama":
case "how old is our president":
case "how old is our president?":
case "when was president obama born":
case "when was president obama born?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> He is 52 years old,born august 4, 1961.");
break;
case "what is in the next mcpe update":
case "what is in the next mcpe update?":
case "whats in the next mcpe update":
case "whats in the next mcpe update?":
case "what's in the next mcpe update":
case "what's in the next mcpeupdate?":
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
case "do you like cake":
case "do you like cake?":
case "do ya like cake":
case "do ya like cake?":
case "cake?":
case "want cake":
case "want cake?":
case "want some cake":
case "want some cake?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Yes,but only the square type.");
break;
case "do you like":
case "do you like singers":
case "do you like singers?":
case "do you like bruno.mars":
case "do you like bruno.mars?":
case "do you like brunomars":
case "do you like brunomars?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> No,maybe,or yes.");
break;
case "you are very":
case "you are":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Why?");
break;
case "switch to creative mode":
case "switch to creative":
case "switch to creativemode":
$user = strtolower($args[0]);
$username = $issuer->username;
$this->api->chat->broadcast("<Siri> Okay, Switching to creative mode...");
$this -> api -> console -> run("gamemode 1".$username);
break;
case "switch to survival mode":
case "switch to survival":
case "switch to survivalmode":
$user = strtolower($args[0]);
$username = $issuer->username;
$this->api->chat->broadcast("<Siri> Okay, Switching to Survival mode...");
$this -> api -> console -> run("gamemode 0".$username);
break;
case "switch to adventure mode":
case "switch to adventure":
case "switch to adventuremode":
$username = $issuer->username;
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Okay, Switching to Adventure mode...");
$this -> api -> console -> run("gamemode 2".$username);
break;
case "any good news":
case "any good news?":
case "do you have some good news":
case "do you have some good news?":
case "good news?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Yes,pocket edition is getting a load");
$this->api->chat->broadcast("of blocks, item's and tweaks.");
$this->api->chat->broadcast("One of the biggest updates in mcpe.");
break;
case "sing for me":
case "sing to me":
case "sing":
case "sing!":
case "sing me a song":
case "play me a song":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> You know I can't sing.");
break;
case "i am master":
case "call me master":
case "my name is master":
case "nickname me master":
case "for now on you will now call me master":
case "i am master!":
case "call me master!":
case "my name is master!":
case "nickname me master!":
case "for now on you will now call me master!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Your wish is my command, O Great and");
$this->api->chat->broadcast("Benevolent Master.");
break;
case "ha ha":
case "ha ha ha":
case "hee hee":
case "tee hee":
case "your funny":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> You think im funny?");
break;
case "I need to go to the bathroom":
case "i need to go to the bathroom to do a number two":
case "i need to go to the bathroom to do a number one":
case "i need to go to the bathroom to do a number 2":
case "i need to go to the bathroom to do a number 1":
case "i feel gassy":
case "i need to go to the toilet":
case "i need to eject some dung":
case "i need to eject some dung!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> We are not that close. Please keep your");
$this->api->chat->broadcast("dung to yourself.");
break;
case "what did the fox say":
case "what did the fox say?":
case "what did the bird say":
case "what did the bird say?":
case "what did the guy say":
case "what did the guy say?":
case "what did the goose say":
case "what did the goose say?":
case "what did the butt say":
case "what did the butt say?":
case "what did the duck say":
case "what did the duck say?":
case "what did the dude say":
case "what did the dude say?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> I don't know. What did he say?");
break;
case "bye":
case "bye bye":
case "see you later":
case "see ya later":
case "bye!":
case "bye bye!":
case "see you later!":
case "see ya later!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Nice talking with you.");
break;
case "morning":
case "good morning":
case "morning!":
case "good morning!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Good morning!");
break;
case "night":
case "good night":
case "night!":
case "good night!":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Good night to you too!");
break;
case "are you nice":
case "are you nice?":
case "are you smart":
case "are you smart?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Yes.");
break;
case "are you always right":
case "are you always right?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> No in fact.");
break;
case "you win siri":
case "okay you win siri":
case "fine you win":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> I rest my case.");
break;
case "do you feel impathy for people":
case "do you feel impathy for people?":
case "do you feel emotional to people":
case "do you feel emotional to people?":
case "do you like anybody":
case "do you like anybody?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> Now that's a good queston. Now where were we.");
break;
case "what is the lyrics for the fox":
case "what is the lyrics for the fox?":
case "give me the lyrics for the fox":
case "give me the lyrics for the fox?":
case "okay siri what is the lyrics for the fox":
case "okay siri what is the lyrics for the fox?":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> okay, foxy.");
$this->api->chat->broadcast("<Siri> Showing page 1 of 2 Usage:/siri the fox pg.2");
$this->api->chat->broadcast("Ducks say quack and fish go blub and the seal goes ");
$this->api->chat->broadcast("ow ow ow ow ow But theres one sound ");
$this->api->chat->broadcast("That no one knows What does the fox say? ");
$this->api->chat->broadcast("Ring-ding-ding-ding-dingeringeding! ");
$this->api->chat->broadcast("<2x Gering-ding-ding-ding-dingeringeding! >");
$this->api->chat->broadcast("What the fox say?<3x Wa-pa-pa-pa-pa-pa-pow! >");
$this->api->chat->broadcast("What the fox say?<3x Hatee-hatee-hatee-ho! >");
$this->api->chat->broadcast("What the fox say?<3x Joff-tchoff-tchoffo-tchoffo-tchoff!>");
$this->api->chat->broadcast("What the fox say? Big blue eyes Pointy nose ");
$this->api->chat->broadcast("Chasing mice and digging holes Tiny paws Up the hill ");
$this->api->chat->broadcast("Suddenly youre standing still Your fur is red ");
$this->api->chat->broadcast("So beautiful Like an angel in disguise ");
break;
case "the fox pg.2":
$user = strtolower($args[0]);
$this->api->chat->broadcast("But if you meet a friendly horse Will you  ");
$this->api->chat->broadcast("communicate by <3x mo-o-o-o-orse?> How will  ");
$this->api->chat->broadcast("you speak to that <3x ho-o-o-o-orse?> What  ");
$this->api->chat->broadcast("does the fox say?  <3x Jacha-chacha-chacha-chow!>");
$this->api->chat->broadcast("What the fox say?  <3x Fraka-kaka-kaka-kaka-kow! >");
$this->api->chat->broadcast("What the fox say? <3x A-hee-ahee ha-hee! >What  ");
$this->api->chat->broadcast("the fox say? A-oo-oo-oo-ooo! Woo-oo-oo-ooo! What  ");
$this->api->chat->broadcast("does the fox say? The secret of the fox Ancient  ");
$this->api->chat->broadcast("mystery Somewhere deep in the woods I know youre   ");
$this->api->chat->broadcast("hiding What is your sound?Will we ever know? Will  ");
$this->api->chat->broadcast("always be a mystery What do you say? Youre my   ");
$this->api->chat->broadcast("guardian angel Hiding in the woodsWhat is your   ");
$this->api->chat->broadcast("sound? Wa-wa-way-do Wub-wid-bid-dum-way-do Wa-wa-way-do ");
$this->api->chat->broadcast("Will we ever know?  Bay-budabud-dum-bam I want to ");
$this->api->chat->broadcast("Mama-dum-day-do  I want to I want to know! ");
$this->api->chat->broadcast("Abay-ba-da bum-bum bay-do...");
break;
case "mute the chat siri":
case "can you mute the chat":
case "can you mute the chat?":
case "mute the chat":
case "mute the chat siri":
case "can you please mute the chat":
case "can you please mute the chat?":
$issuer->disableChat = false;
$issuer->sendChat("<Siri> Okay you won't be seeing any messages. ", "", true);
break;
case "unmute the chat siri":
case "can you unmute the chat":
case "can you unmute the chat?":
case "unmute the chat":
case "unmute the chat siri":
case "can you please unmute the chat":
case "can you please unmute the chat?":
$issuer->disableChat = true;
$issuer->sendChat("<Siri> Okay you will now start to recieve messages again. ");
break;
case "where am i":
case "where am i?":
case "coords":
case "show me where i am":
$input =$params[0];
$player =$issuer;
$rawx =ceil($player->entity->x);
$x=round($rawx,2);
$rawy =ceil($player->entity->y);
$y=round($rawy,2);
$rawz =ceil($player->entity->z);
$z=round($rawz,2);
$level =$player->entity->level->getName();
$output ="<Siri> You are at X: $x Y: $y Z: $z" ;
return $output;
break;
case "help":
case "what can i say to you":
case "what can i say to you?":
case "i dont know how this works":
case "i don't know how this works":
$this->api->chat->broadcast("<Siri> Things you can say to me.");
$this->api->chat->broadcast("coords, mute the chat,the fox pg.2, give me info on grass,");
$this->api->chat->broadcast("what did the fox say?, what is the lyrics for the fox,");
$this->api->chat->broadcast("search up minecraft, increase my brightness and several");
$this->api->chat->broadcast("more.");
break;
/*DATA VALUES AND CRAFTING*/
case "what is the value for air":
case "what is the data value for air":
case "what is the datavalue for air":
case "what is the value for air?":
case "what is the data value for air?":
case "what is the datavalue for air?":
case "how do i craft air":
case "how do i craft air?":
case "how do you craft air":
case "how do you craft air?":
case "what is datavalue 0":
case "what is datavalue 0?":
case "what is data value 0":
case "what is data value 0?":
case "give me info on air":
case "give me information on air":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Air. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 0");
break;
case "what is the value for stone":
case "what is the data value for stone":
case "what is the datavalue for stone":
case "what is the value for stone?":
case "what is the data value for stone?":
case "what is the datavalue for stone?":
case "how do i craft stone":
case "how do i craft stone?":
case "how do you craft stone":
case "how do you craft stone?":
case "what is datavalue 1":
case "what is datavalue 1?":
case "what is data value 1":
case "what is data value 1?":
case "give me info on stone":
case "give me information on stone":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Stone. Can be obtained from smelting cobblestone. Block not craftible.");
$this->api->chat->broadcast("<Siri> data value is 1");
break;
case "what.is.the.value.for.grass":
case "what.is.the.data.value.for.grass":
case "what.is.the.datavalue.for.grass":
case "what.is.the.value.for.grass?":
case "what.is.the.data.value.for.grass?":
case "what.is.the.datavalue.for.grass?":
case "how.do.i.craft.grass":
case "how.do.i.craft.grass?":
case "how.do.you.craft.grass":
case "how.do.you.craft.grass?":
case "what.is.datavalue.2":
case "what.is.datavalue.2?":
case "what.is.data.value.2":
case "what.is.data.value.2?":
case "give.me.info.on.grass":
case "give.me.information.on.grass":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Grass. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 2");
break;
case "what.is.the.value.for.dirt":
case "what.is.the.data.value.for.dirt":
case "what.is.the.datavalue.for.dirt":
case "what.is.the.value.for.dirt?":
case "what.is.the.data.value.for.dirt?":
case "what.is.the.datavalue.for.dirt?":
case "how.do.i.craft.dirt":
case "how.do.i.craft.dirt?":
case "how.do.you.craft.dirt":
case "how.do.you.craft.dirt?":
case "what.is.datavalue.3":
case "what.is.datavalue.3?":
case "what.is.data.value.3":
case "what.is.data.value.3?":
case "give.me.info.on.dirt":
case "give.me.information.on.dirt":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Dirt. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 3");
break;
case "what.is.the.value.for.cobblestone":
case "what.is.the.data.value.for.cobblestone":
case "what.is.the.datavalue.for.cobblestone":
case "what.is.the.value.for.cobblestone?":
case "what.is.the.data.value.for.cobblestone?":
case "what.is.the.datavalue.for.cobblestone?":
case "how.do.i.craft.cobblestone":
case "how.do.i.craft.cobblestone?":
case "how.do.you.craft.cobblestone":
case "how.do.you.craft.cobblestone?":
case "what.is.datavalue.4":
case "what.is.datavalue.4?":
case "what.is.data.value.4":
case "what.is.data.value.4?":
case "give.me.info.on.cobblestone":
case "give.me.information.on.cobblestone":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Cobblestone. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 4");
break;
case "what.is.the.value.for.wooden.plank":
case "what.is.the.data.value.for.wooden.plank":
case "what.is.the.datavalue.for.wooden.plank":
case "what.is.the.value.for.wooden.plank?":
case "what.is.the.data.value.wooden.plank?":
case "what.is.the.datavalue.for.wooden.plank?":
case "how.do.i.craft.wooden.plank":
case "how.do.i.craft.wooden.plank?":
case "how.do.you.craft.wooden.plank":
case "how.do.you.craft.wooden.plank?":
case "what.is.datavalue.5":
case "what.is.datavalue.5?":
case "what.is.data.value.5":
case "what.is.data.value.5?":
case "give.me.info.on.wooden.plank":
case "give.me.information.on.wooden.plank":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .WoodenPlank. You can craft 4 pieces with 1 piece of wood.");
$this->api->chat->broadcast("<Siri> data value is 5");
break;
case "what.is.the.value.for.sapling":
case "what.is.the.data.value.for.sapling":
case "what.is.the.datavalue.for.sapling":
case "what.is.the.value.for.wooden.sapling?":
case "what.is.the.data.value.wooden.sapling?":
case "what.is.the.datavalue.for.wooden.sapling?":
case "how.do.i.craft.wooden.sapling":
case "how.do.i.craft.wooden.sapling?":
case "how.do.you.craft.wooden.sapling":
case "how.do.you.craft.wooden.sapling?":
case "what.is.datavalue.6":
case "what.is.datavalue.6?":
case "what.is.data.value.6":
case "what.is.data.value.6?":
case "give.me.info.on.sapling":
case "give.me.information.on.sapling":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .sapling. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 6");
break;
case "what.is.the.value.for.bedrock":
case "what.is.the.data.value.for.bedrock":
case "what.is.the.datavalue.for.bedrock":
case "what.is.the.value.for.wooden.bedrock?":
case "what.is.the.data.value.wooden.bedrock?":
case "what.is.the.datavalue.for.wooden.bedrock?":
case "how.do.i.craft.wooden.bedrock":
case "how.do.i.craft.wooden.bedrock?":
case "how.do.you.craft.wooden.bedrock":
case "how.do.you.craft.wooden.bedrock?":
case "what.is.datavalue.7":
case "what.is.datavalue.7?":
case "what.is.data.value.7":
case "what.is.data.value.7?":
case "give.me.info.on.bedrock":
case "give.me.information.on.bedrock":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .bedrock. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 7");
break;
case "what.is.the.value.for.water":
case "what.is.the.data.value.for.water":
case "what.is.the.datavalue.for.water":
case "what.is.the.value.for.water?":
case "what.is.the.data.valuewater?":
case "what.is.the.datavalue.for.water?":
case "how.do.i.craft.water":
case "how.do.i.craft.water?":
case "how.do.you.craft.water":
case "how.do.you.craft.water?":
case "what.is.datavalue.8":
case "what.is.datavalue.8?":
case "what.is.data.value.8":
case "what.is.data.value.8?":
case "give.me.info.on.water":
case "give.me.information.on.water":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .water. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 8");
break;
case "what.is.the.value.for.Stationarywater":
case "what.is.the.data.value.for.Stationarywater":
case "what.is.the.datavalue.for.Stationarywater":
case "what.is.the.value.for.Stationarywater?":
case "what.is.the.data.value.Stationarywater?":
case "what.is.the.datavalue.for.Stationarywater?":
case "how.do.i.craft.Stationarywater":
case "how.do.i.craft.Stationarywater?":
case "how.do.you.craft.Stationarywater":
case "how.do.you.craft.water?":
case "what.is.datavalue.9":
case "what.is.datavalue.9?":
case "what.is.data.value.9":
case "what.is.data.value.9?":
case "give.me.info.on.Stationarywater":
case "give.me.information.on.Stationarywater":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Stationarywater. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 9");
break;
case "what.is.the.value.for.lava":
case "what.is.the.data.value.for.lava":
case "what.is.the.datavalue.for.lava":
case "what.is.the.value.for.lava?":
case "what.is.the.data.value.lava?":
case "what.is.the.datavalue.for.lava?":
case "how.do.i.craft.lava":
case "how.do.i.craft.lava?":
case "how.do.you.craft.lava":
case "how.do.you.craft.lava?":
case "what.is.datavalue.10":
case "what.is.datavalue.10?":
case "what.is.data.value.10":
case "what.is.data.value.10?":
case "give.me.info.on.lava":
case "give.me.information.on.lava":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .lava. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 10");
break;
case "what.is.the.value.for.Stationarylava":
case "what.is.the.data.value.for.Stationarylava":
case "what.is.the.datavalue.for.Stationarylava":
case "what.is.the.value.for.Stationarylava?":
case "what.is.the.data.value.Stationarylava?":
case "what.is.the.datavalue.for.Stationarylava?":
case "how.do.i.craft.Stationarylava":
case "how.do.i.craft.Stationarylava?":
case "how.do.you.craft.Stationarylava":
case "how.do.you.craft.Stationarylava?":
case "what.is.datavalue.11":
case "what.is.datavalue.11?":
case "what.is.data.value.11":
case "what.is.data.value.11?":
case "give.me.info.on.Stationarylava":
case "give.me.information.on.Stationarylava":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Stationarylava. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 11");
break;
case "what.is.the.value.for.sand":
case "what.is.the.data.value.for.sand":
case "what.is.the.datavalue.for.sand":
case "what.is.the.value.for.sand?":
case "what.is.the.data.value.sand?":
case "what.is.the.datavalue.for.sand?":
case "how.do.i.craft.sand":
case "how.do.i.craft.sand?":
case "how.do.you.craft.sand":
case "how.do.you.craft.sand?":
case "what.is.datavalue.12":
case "what.is.datavalue.12?":
case "what.is.data.value.12":
case "what.is.data.value.12?":
case "give.me.info.on.sand":
case "give.me.information.on.sand":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .sand. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 12");
break;
case "what.is.the.value.for.Gravel":
case "what.is.the.data.value.for.Gravel":
case "what.is.the.datavalue.for.Gravel":
case "what.is.the.value.for.Gravel?":
case "what.is.the.data.value.Gravel?":
case "what.is.the.datavalue.for.Gravel?":
case "how.do.i.craft.Gravel":
case "how.do.i.craft.Gravel?":
case "how.do.you.craft.Gravel":
case "how.do.you.craft.Gravel?":
case "what.is.datavalue.13":
case "what.is.datavalue.13?":
case "what.is.data.value.13":
case "what.is.data.value.13?":
case "give.me.info.on.Gravel":
case "give.me.information.on.Gravel":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .Gravel. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 13");
break;
case "what.is.the.value.for.goldore":
case "what.is.the.data.value.for.goldore":
case "what.is.the.datavalue.for.goldore":
case "what.is.the.value.for.goldore?":
case "what.is.the.data.value.goldore?":
case "what.is.the.datavalue.for.goldore?":
case "how.do.i.craft.goldore":
case "how.do.i.craft.goldore?":
case "how.do.you.craft.goldore":
case "how.do.you.craft.goldore?":
case "what.is.datavalue.14":
case "what.is.datavalue.14?":
case "what.is.data.value.14":
case "what.is.data.value.14?":
case "give.me.info.on.goldore":
case "give.me.information.on.goldore":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .goldore. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 14");
break;
case "what.is.the.value.for.ironore":
case "what.is.the.data.value.for.ironore":
case "what.is.the.datavalue.for.ironore":
case "what.is.the.value.for.ironore?":
case "what.is.the.data.value.ironore?":
case "what.is.the.datavalue.for.ironore?":
case "how.do.i.craft.ironore":
case "how.do.i.craft.ironore?":
case "how.do.you.craft.ironore":
case "how.do.you.craft.ironore?":
case "what.is.datavalue.15":
case "what.is.datavalue.15?":
case "what.is.data.value.15":
case "what.is.data.value.15?":
case "give.me.info.on.ironore":
case "give.me.information.on.ironore":
$user = strtolower($args[0]);
$this->api->chat->broadcast("<Siri> .ironore. This item cannot be crafted.");
$this->api->chat->broadcast("<Siri> data value is 15");
break;
}
}

}
