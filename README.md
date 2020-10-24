# RH Editor Block Starter

This repo can be used as a template for starting development of your own custom blocks. It is run by `@wordpress/scripts` and inlcudes some additional benefits such as an easy way to register a custom post type, scripts to generate translation files (requires WP CLI) and to include build files in releases.

There is a template for a standard block as well as for a dynamic (server side rendered) one. Block scripts are structured as is done for the Gutenberg block library (the core blocks).

The repo adheres to current WordPress standards and as such specifies the package versions that ship with core v5.5. The most usual packages are already in `package.json`. Add more if you need additional ones, remove the ones you do not need.

PHP follows `psr-4` rules, as such this plugin should be installed using composer. If you want to achieve broader compatibility include the `vendor` (or your custom composer folder) in the release commits.
