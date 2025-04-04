# Neuhub Tab Theme for Hubzilla

* By [Federated Works](https://federated.works)
* Website: [Neuhub.org](https://neuhub.org)
* Extends: [Hubzilla](https://hubzilla.org)
* Project Lead: Scott M. Stolz

### **Latest Version**

- Website: https://neuhub.org
- Documentation: https://neuhub.org/page/documentation/neuhub-tab
- Repository: https://framagit.org/federated-works/neuhub/hubzilla-themes/-/tree/main/neuhub-tab

This is a theme that uses the Tabler UI Kit to display Redbasic deisgn elements, with a custom navigation system.

## Making Modifications

You can override various parts of the Neuhub Tab theme simply by creating a new file with the name of the file you want to override.

For example, if you want to change the navigation bar at the top of the page, you would create a file called `navbar_default.tpl` and put it in the `tpl` directory. This will override the `navbar_default.tpl` located in the `/view/tpl` directory. 

I recommend copying the original file and modifying it, but you can start from scratch if you want.

## Getting Started

1. Make a copy of this theme and rename the `neuhub-tab` directory to the name of your new theme.
2. Change the details in `php/theme.php`.
3. Change the path to this theme's stylesheet in `php/style.php`.
4. Test the new theme by uploading it to the `/view/theme` directory of your Hubzilla installation. Use Git, WebDisk, FTP, or cPanel File Manager to upload.

After uploading, your theme should be located at: `/view/theme/whatever-you-named-the-directory/`

Testing at this point is optional, but if you have never installed a derivative theme before, this will tell you if you installed it in the right place and gives you a good starting point to work from. Personally, I like making sure everything works in default mode before I start making changes. That way, if there is a problem, it is easier to figure out the cause.

## Modifying the Theme

Whatever you place in each folder overrides the default file. You can also add additional files.

If you are just making minor changes, then overriding specific `tpl` and `css` files would probably work well. But if you are changing the basic structure and layout, then you will probably need to copy `/view/php/default.php` to `/view/theme/your-theme-name/php/default.php` and then make your changes there. You can also create new layouts by creating your own php files in `/view/theme/your-theme-name/php/` and then use the PDL Editor in Hubzilla to select it or specifying that template in the `pdl` files.

- **Layout**: Files in the `php` directory override files in `/view/php` and in the Redbasic theme.
- **Templates**: Files in the `tpl` directory override files in `/view/tpl` and in the Redbasic theme.
- **CSS**: Files in the `css` directory override files in `/view/css` and in the Redbasic theme.
- **Javascript**: Files in the `js` directory override files in `/view/js` and in the Redbasic theme.
- **Images**: Add your own images to the `img` directory.

## Finishing Touches

1. Update `img/screenshot.png` with a screenshot of your new theme.
2. Update `php/theme.php` again if you want to give it a new version number.
3. Change or replace this `README.md` file if you plan on sharing your new theme with others.
4. Upload the changes to your website via Git, WebDisk, FTP, or cPanel File Manager.

## Notes

This deriviative theme does not currently support schemes. However, this theme will inherit any settings you have made in the Redbasic theme, including the Advanced Theme Settings.

## Contributions & Funding 

Contributions in the form of suggestions, collaborations, pull requests, and money (of course), are appreciated.

To help fund this project and other similar projects, we would appreciate a contribution:
* https://buymeacoffee.com/federated

Also, if you purchase Managed Hubzilla (or anything else) though this TechSero affiliate link, a portion of your purchase will be dedicated towards Federated Works and projects like this. Your patronage is appreciated.
* https://techsero.net/aff.php?aff=3

WisTex TechSero supports this open source project, so by supporting WisTex Techsero, you support this open source project.

## Credits

This theme uses the Tabler UI Kit, which can be found at https://tabler.io

I studied the themes from https://github.com/DeadSuperHero/hubzilla-themes and used their structure as a model. 

And, of course, this theme references code from the Redbasic theme located at: https://framagit.org/hubzilla/core
