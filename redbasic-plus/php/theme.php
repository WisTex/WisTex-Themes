<?php

/**
 *   * Name: Redbasic Plus Theme
 *   * Description: A derivative theme of Redbasic that has some additional navigation.
 *   * Version: 2.2.5
 *   * MinVersion: 8.0
 *   * MaxVersion: 10.0
 *   * Author: Scott M. Stolz
 *   * Maintainer: Scott M. Stolz
 *   * License: MIT License (Expat Version) - https://license.neuhub.org
 *   * Copyright: 2022 © WisTex TechSero Ltd. Co.
 *   * Respository: https://github.com/WisTex/Neuhub
 *   * Compat: Hubzilla [*]
 *
 */

// When you create a new theme, don't forget to edit the information above.
// If you change the name of the theme to `yournewname` change `redbasicchild_init` to `yournewname_init` so it has a unique name.
// You will also need to edit the style.php file if you change the directory name.

function redbasicchild_init(&$App) {

    App::$theme_info['extends'] = 'redbasic';


}
