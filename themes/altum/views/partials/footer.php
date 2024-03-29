<?php defined('ALTUMCODE') || die() ?>

<div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
    <div class="mb-3 mb-lg-0">
        <a class="h5" href="<?= url() ?>" data-logo data-light-value="<?= settings()->main->logo_light != '' ? \Altum\Uploads::get_full_url('logo_light') . settings()->main->logo_light : settings()->main->title ?>" data-light-class="<?= settings()->main->logo_light != '' ? 'mb-2 footer-logo' : 'mb-2' ?>" data-dark-value="<?= settings()->main->logo_dark != '' ? \Altum\Uploads::get_full_url('logo_dark') . settings()->main->logo_dark : settings()->main->title ?>" data-dark-class="<?= settings()->main->logo_dark != '' ? 'mb-2 footer-logo' : 'mb-2' ?>">
            <?php if(settings()->main->{'logo_' . \Altum\ThemeStyle::get()} != ''): ?>
                <img src="<?= \Altum\Uploads::get_full_url('logo_' . \Altum\ThemeStyle::get()) . settings()->main->{'logo_' . \Altum\ThemeStyle::get()} ?>" class="mb-2 footer-logo" alt="<?= l('global.accessibility.logo_alt') ?>" />
            <?php else: ?>
                <span class="mb-2"><?= settings()->main->title ?></span>
            <?php endif ?>
        </a>
        <div><?= sprintf(l('global.footer.copyright'), date('Y'), settings()->main->title) ?></div>
    </div>

    <div class="d-flex flex-column flex-lg-row">
        <?php if(count(\Altum\Language::$active_languages) > 1): ?>
            <div class="dropdown mb-2 ml-lg-3" data-toggle="tooltip" title="<?= l('global.choose_language') ?>">
                <button type="button" class="btn btn-link text-decoration-none p-0" id="language_switch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-sm fa-language mr-1"></i> <?= \Altum\Language::$name ?>
                </button>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language_switch">
                    <?php foreach(\Altum\Language::$active_languages as $language_name => $language_code): ?>
                        <a class="dropdown-item" href="<?= SITE_URL . $language_code . '/' . \Altum\Router::$original_request . '?set_language=' . $language_name ?>">
                            <?php if($language_name == \Altum\Language::$name): ?>
                                <i class="fa fa-fw fa-sm fa-check mr-2 text-success"></i>
                            <?php else: ?>
                                <i class="fa fa-fw fa-sm fa-circle-notch mr-2 text-muted"></i>
                            <?php endif ?>

                            <?= $language_name ?>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endif ?>

        <?php if(count(\Altum\ThemeStyle::$themes) > 1): ?>
            <div class="mb-2 ml-lg-3">
                <button type="button" id="switch_theme_style" class="btn btn-link text-decoration-none p-0" data-toggle="tooltip" title="<?= sprintf(l('global.theme_style'), (\Altum\ThemeStyle::get() == 'light' ? l('global.theme_style_dark') : l('global.theme_style_light'))) ?>" data-title-theme-style-light="<?= sprintf(l('global.theme_style'), l('global.theme_style_light')) ?>" data-title-theme-style-dark="<?= sprintf(l('global.theme_style'), l('global.theme_style_dark')) ?>">
                    <span data-theme-style="light" class="<?= \Altum\ThemeStyle::get() == 'light' ? null : 'd-none' ?>"><i class="fa fa-fw fa-sm fa-sun mr-1"></i> <?=  l('global.theme_style_light') ?></span>
                    <span data-theme-style="dark" class="<?= \Altum\ThemeStyle::get() == 'dark' ? null : 'd-none' ?>"><i class="fa fa-fw fa-sm fa-moon mr-1"></i> <?=  l('global.theme_style_dark') ?></span>
                </button>
            </div>

            <?php include_view(THEME_PATH . 'views/partials/theme_style_js.php') ?>
        <?php endif ?>
    </div>
</div>

    <div class="col-12 col-lg-auto">
        <div class="d-flex flex-wrap">
            <?php foreach(require APP_PATH . 'includes/admin_socials.php' as $key => $value): ?>
                <?php if(isset(settings()->socials->{$key}) && !empty(settings()->socials->{$key})): ?>
                    <a href="<?= sprintf($value['format'], settings()->socials->{$key}) ?>" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank" data-toggle="tooltip" title="<?= $value['name'] ?>"><i class="<?= $value['icon'] ?> fa-fw fa-lg"></i></a>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>
