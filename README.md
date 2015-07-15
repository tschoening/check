Contao check
============

With this script you can check the Contao Open Source CMS system requirements,
validate an existing Contao installation or set up a new Contao installation.


## What's included

Here is a short overview of what you can do with the script:

 * Check which Contao versions can be installed;
 * check if PHP is allowed to write files on the server;
 * check if the Live Update service can be used;
 * check if the Composer package manager can be used;
 * check if the extension repository can be used;
 * install the latest Contao version or Contao LTS version;
 * validate an existing Contao installation.


## How to use

Upload the `/check` folder to your server where you want to install Contao.
To validate an existing installation, upload the `/check` folder to the root of
your Contao installation. Then open it in a web browser.

Please be aware that validation of an existing installation is mainly designed
for installations created by using this tool or officially released archives,
e.g. by uploading their content using FTP or such. Therefore validation more or
less just checks the presence and contents of files against a known list of
those being part of an official release. This way this tool can help to check
if everything needed by an official release has been successfully deployed.

If you use other ways of deploying contao, e.g. like cloning the git repo, the
validation is __NOT__ intended to be used, nor needed: Just use the built in
`git status` to see which files are missing or have changed. It's important to
recognize that the git repo may not contain each and every file included in an
official release, because some of those are created afterwards by purpose and
then may differ from the once released versions. This is especially true for
e.g. language files: Official releases contain all of the supported langauge
files in a specific version, using git instead it's up to you to download those
language files you actually need. Because their versions can then differ from
the released ones, e.g. spelling errors may have been fixed in the meanwhile,
the validation of this tool can't properly check those against its own known
list of files.

Anyway, this doesn't influence the other checks for e.g. the pre-requisites to
use contao, which can still be used, just be aware that the validation itself
may not behave as expected in a git deployment.


## Web installer

The web installer requires the PHP extensions "curl" and "Zip" to be installed
in order to download and extract the latest Contao release.
