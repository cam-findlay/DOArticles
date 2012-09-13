#Dataobject Articles for silverstripe 3 - dataobject as pages

##Whats new?
I moved the things from one place to another to order the repo. now the master branch will have all the features and i left a small and simple version called 'simple' for the users that only needs to paginate articles in categories that are not related. 

now you can have a holder for categories and multiple articles that belongs many categories, each with multiple tags and even categories between categories!! -sick isn't it?

##Overview

This is a simple module for adding dataobject as pages functionality on silverstripe 3, can be used for news, products or anything you can think of that doesnt need to appear in the sitetree. If you have an object that you will create more than 20, i believe that this module is better than using Pages, because of the way the sitetree works and maybe because of performance (large sitetree its slower than a datalist).

## Installation ##
Just as any other silverstripe module, drag it into the root folder, run dev/build, and you are done. In the left menu of your site you will find an "Articles" section for adding/editing Article Objects.

## Usage ##
With this module you can control Articles in several "Article Holder Pages", those must be created inside a Category Holder as any other page in the CMS, just configuring it as "Article Holder". When you create a Object with the module, the first thing it will ask is in what article holder will appear (imagine that each holder is a category).

## useful functions ##
- archive function! that means that your articles can be filtered by year and month. the url for this is your-holderpage/archive/year/month
if the month is empty it automatically will show all the posts for the complete year paginated. amazing isn't it? -> thanks stuckinrealtime

## TODO ##
Search capabilities... im working on this module to learn how silvertripe 3 handles things, so i think this will be the next step.

## Maintainer ##
francisco arenas (fa@dospuntocero.cl)

## Amazing coders ##
shawn mathews (stuckinrealtime@gmail.com)
cam findlay, for helping us improve the module :)

## License ##
Do what you want with it, I'm happy that you can use this small module, and if you use it, just let me know and if you can improve it, just sent me a pull request :)

## Attribution ##
I stole one icon (the article holder page), but i dont remember from where. i will add the proper attribution when i remember. [sorry pal, you make awesome icons!]

## The image ##
![module in action](https://img.skitch.com/20120913-bt8a4yh63bxi6ft9gd47qmgsim.png "an article being edited")


