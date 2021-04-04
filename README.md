### About

Image Alternate Text extension for phpBB.

[![Build Status](https://img.shields.io/github/workflow/status/AlfredoRamos/phpbb-ext-image-alt/CI?style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-hide/actions)
[![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-image-alt.svg?label=stable&style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-image-alt/releases)
[![Code Quality](https://img.shields.io/codacy/grade/f06ec0db39c049fc8883b6c65e10405a.svg?style=flat-square)](https://app.codacy.com/manual/AlfredoRamos/phpbb-ext-image-alt/dashboard)
[![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-image-alt.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-image-alt/master/license.txt)

Allows you to set alternate text to image tags to abide SEO recommendations.

**BBCode input**
```
[img alt="text"]url[/img]
```

**Markdown input** (requires the [Markdown phpBB extension](https://github.com/AlfredoRamos/phpbb-ext-markdown))
```markdown
![text](url)
```

___
**HTML output**

```html
<img src="url" class="postimage" alt="text">
```

### Features

- It doesn't require additional configuration
- Compatibility with [Markdown](https://github.com/AlfredoRamos/phpbb-ext-markdown) extension
- Full support for Unicode text, including emojis
- The engine sanitizes the text, so no unsafe text is used

### Requirements

- PHP 7.1.3 or greater
- phpBB 3.3 or greater

### Support

- [**Download page**](https://www.phpbb.com/customise/db/extension/image_alternate_text/)
- [Support area](https://www.phpbb.com/customise/db/extension/image_alternate_text/support)
- [GitHub issues](https://github.com/AlfredoRamos/phpbb-ext-image-alt/issues)

### Donate

If you like or found my work useful and want to show some appreciation, you can consider supporting its development by giving a donation.

[![Donate with PayPal](https://alfredoramos.mx/images/donate.svg)](https://alfredoramos.mx/donate/)

[![Donate with PayPal](https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom.svg)](https://alfredoramos.mx/donate/)

### Installation

- Download the [latest release](https://github.com/AlfredoRamos/phpbb-ext-image-alt/releases)
- Decompress the `*.zip` or `*.tar.gz` file
- Copy the files and directories inside `{PHPBB_ROOT}/ext/alfredoramos/imagealt/`
- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Enable` and confirm

### Preview

### Configuration

It doesn’t require any configuration.

[![Image Alternate Text preview](https://i.imgur.com/yLgDJpGb.png)](https://i.imgur.com/yLgDJpG.png)

*(Click to view in full size)*

### Uninstallation

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm
- Go back to `Manage extensions` > `Image Alternate Text` > `Delete data` and confirm

### Upgrade

- Uninstall the extension
- Delete all the files inside `{PHPBB_ROOT}/ext/alfredoramos/imagealt/`
- Download the new version
- Install the extension
