### About

Image Alternate Text extension for phpBB.

[![Build Status](https://img.shields.io/travis/com/AlfredoRamos/phpbb-ext-image-alt.svg?style=flat-square)](https://travis-ci.com/AlfredoRamos/phpbb-ext-image-alt)
[![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-image-alt.svg?label=stable&style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-image-alt/releases)
[![Code Quality](https://img.shields.io/codefactor/grade/github/AlfredoRamos/phpbb-ext-image-alt.svg?style=flat-square)](https://www.codefactor.io/repository/github/alfredoramos/phpbb-ext-image-alt)
[![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-image-alt.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-image-alt/master/license.txt)

### Dependencies

- PHP 7.1.3 or greater
- phpBB 3.3 or greater

### Installation

- Download the [latest release](https://github.com/AlfredoRamos/phpbb-ext-image-alt/releases)
- Decompress the `*.zip` or `*.tar.gz` file
- Copy the files and directories inside `{PHPBB_ROOT}/ext/alfredoramos/imagealt/`
- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Enable` and confirm

### Usage

Allows you to set alternate text to image tags. Example:

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

### Configuration

It doesn’t require any configuration.

### Uninstallation

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm
- Go back to `Manage extensions` > `Image Alternate Text` > `Delete data` and confirm

### Upgrade

- Uninstall the extension
- Delete all the files inside `{PHPBB_ROOT}/ext/alfredoramos/imagealt/`
- Download the new version
- Install the extension
