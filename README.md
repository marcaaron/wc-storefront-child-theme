# Storefront Child Theme

This is a child theme for WooCommerce site using the Storefront parent theme. This is a work in progress. But you can still download and install if you're curious to see where I'm at with it.

## Installation

1. Clone this Repository and create an archive zip file from it.
2. Goto WordPress > Appearance > Themes > Add New.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use the theme right away.

## Usage

This child theme is requires that you have the WooCommerce StoreFront theme installed which you can download for free below.

* [Download WooCommerce StoreFront Theme](https://wordpress.org/themes/storefront/)
* [StoreFront Documentation](http://docs.woocommerce.com/documentation/themes/storefront/)
* [StoreFront Child Themes](https://woocommerce.com/product-category/themes/storefront-child-theme-themes/)
* [StoreFront Extensions](https://woocommerce.com/product-category/storefront-extensions/)

## Editing the Child Theme

Custom PHP that you write should be added to the child themes functions.php file whilst any custom CSS should be added to the child themes style.css file.

If you'd like to edit the css styles. I'd suggest you do so by editing the [SASS - Syntactically Awesome Style Sheets](http://sass-lang.com/) files and compiling them down to style.css in the project root. There is a script for watching the assets/sass directory that will watch and compile as you edit. To do this run `yarn start` in the command line.

If you would like to learn more about child themes for WordPress see this documentation below.

* [WordPress Child Themes](https://codex.wordpress.org/Child_Themes)
