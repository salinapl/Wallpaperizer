# Wallpaperizer - Icon-Grid aligned Wallpaper design assistant
A simple plugin for creating icon grid aligned wallpapers using [Kirby](https://getkirby.com)

<img src="https://github.com/salinapl/Wallpaperizer/blob/main/.github/images/panel.png?raw=true" width="30%"></img> <img src="https://github.com/salinapl/Wallpaperizer/blob/main/.github/images/debug.png?raw=true" width="30%"></img> <img src="https://github.com/salinapl/Wallpaperizer/blob/main/.github/images/output.png?raw=true" width="30%"></img> 


## Features


- Customizable grid dimensions (via CSS)
- Plot zones in a structure element
- Customize Colors per entry
- Customize backgrounds and logo easily
- adjust logo placement easily
- Utilize CSS styling elements and filters

## Planned Features

- Easier wallpaper capture (not sure how yet

## Download and Install

This repository only contains the content pages of the site, you will need to download the latest Kirby plainkit seprately.

1. Before Starting, please check that your webserver meets Kirbys minimum requirements **[listed here](https://getkirby.com/docs/guide/quickstart#requirements)** and read the provided getting started documentation.
1. Download the latest release of **[Kirby Plainkit](https://github.com/getkirby/plainkit)**
1. Extract the plainkit to your Website Folder
1. Download the latest release of Wallpaperizer from the **[releases page](https://github.com/salinapl/Wallpaperizer/releases)**
1. Extract Wallpaperizer into the plugin folder
1. Start your webserver and navigate to **yourdomain.example.com/location-of-kirbycms-install/panel** and you will be asked to create an account.
1. After creating the account, you will need to make a page using the wallpaper template page, you may need to change the site blueprint to allow this depending on your install

## Exporting a Wallpaper

Currently the only way to capture a wallpaper is to take a screenshot of the webpage. If your web browser is the same resolution as the wallpaper, this is difficult, below are several methods to do this in that situation:

### Via Chrome
You can start chrome in "headless mode and take a screenshot, then close, specifying the resoultion. for some reason, if you render the page at exactly the desired resolution, it renders incorrectly, so you have to render the page larger than the target resolution. Running the below in command prompt should output a usable start you can crop to size:

`start chrome.exe --headless --screenshot="C:\output.png" --window-size=2500,1500 "http://path-to-your-kirby-page"`

### Via Firefox
Just like chrome, you can start firefox in headless mode, take a screenshot, and close firefox. By default, firefox will not run if firefox is already open, so close the browser before running the command. Unlike chrome, firefox will correctly capture the page at the desired target resolution without needing to crop it afterward, but it appears to be missing some CSS filter effects. Run the following in command prompt:

`start firefox -headless -screenshot C:\Users\techsupport\Downloads\test.png -window-size 1920,1080 http://path-to-your-kirby-page`

### Kirby
You can try Kirby on your local machine or on a test
server as long as you need to make sure it is the right
tool for your next project.

However Production use requires a License Key.

### Buying a license

You can purchase your Kirby license at
<https://getkirby.com/buy>

A Kirby license is valid for a single domain. You can find
Kirby's license agreement here: <https://getkirby.com/license>

You can learn more about Kirby at [getkirby.com](https://getkirby.com).

### Kirby Documentation

<https://getkirby.com/docs>

### Kirby Support

<https://getkirby.com/support>
    
## Issues

We do not develop for Kirby, for issues getting Kirby up and running, please contact that project.

If you have a Github account, please report issues directly on Github: <https://github.com/salinapl/LibSignTool/issues>

Or you can email the maintainers directly at <tech.lib@salinapublic.org>
