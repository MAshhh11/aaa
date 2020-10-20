<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/corrections' => [[['_route' => 'correction_index', '_controller' => 'App\\Controller\\Admin\\CorrectionController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/admin/corrections/donnees' => [[['_route' => 'correction_datas', '_controller' => 'App\\Controller\\Admin\\CorrectionController::datasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/corrections/exercice/valider' => [[['_route' => 'validate_exercice', '_controller' => 'App\\Controller\\Admin\\CorrectionController::validateExercice'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/modules' => [[['_route' => 'course_index', '_controller' => 'App\\Controller\\Admin\\CourseController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/admin/modules/donnees' => [[['_route' => 'course_datas', '_controller' => 'App\\Controller\\Admin\\CourseController::datasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/modules/ordre-des-exercices-enregistrement' => [[['_route' => 'course_exercice_rank', '_controller' => 'App\\Controller\\Admin\\CourseController::exerciceRankSave'], null, null, null, false, false, null]],
        '/espace-etudiant' => [[['_route' => 'dashboard_home', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/admin/exercices' => [[['_route' => 'exercice_index', '_controller' => 'App\\Controller\\Admin\\ExerciceController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/admin/exercices/donnees' => [[['_route' => 'exercice_datas', '_controller' => 'App\\Controller\\Admin\\ExerciceController::datasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/formations' => [[['_route' => 'formation_index', '_controller' => 'App\\Controller\\Admin\\FormationController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/admin/formations/donnees' => [[['_route' => 'formation_datas', '_controller' => 'App\\Controller\\Admin\\FormationController::datasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/formations/ordre-des-cours-enregistrement' => [[['_route' => 'course_formation_rank', '_controller' => 'App\\Controller\\Admin\\FormationController::courseRankSave'], null, null, null, false, false, null]],
        '/froala/envoi-image' => [[['_route' => 'froala_upload_file', '_controller' => 'App\\Controller\\Admin\\FroalaController::uploadFile'], null, null, null, false, false, null]],
        '/froala/suppression-image' => [[['_route' => 'froala_remove_file', '_controller' => 'App\\Controller\\Admin\\FroalaController::removeFile'], null, null, null, false, false, null]],
        '/froala/liste-images' => [[['_route' => 'froala_lib_files', '_controller' => 'App\\Controller\\Admin\\FroalaController::libFiles'], null, null, null, false, false, null]],
        '/froala/envoi-video' => [[['_route' => 'froala_upload_video', '_controller' => 'App\\Controller\\Admin\\FroalaController::uploadVideo'], null, null, null, false, false, null]],
        '/espace-etudiant/messages' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\Admin\\MessageController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/messages/donnees' => [[['_route' => 'message_datas', '_controller' => 'App\\Controller\\Admin\\MessageController::datasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Admin\\SecurityController::login'], null, null, null, false, false, null]],
        '/espace-etudiant/mot-de-passe-perdu' => [[['_route' => 'security_reset_password', '_controller' => 'App\\Controller\\Admin\\SecurityController::resetPassword'], null, null, null, false, false, null]],
        '/espace-etudiant/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Admin\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/switch' => [[['_route' => 'switch_home', '_controller' => 'App\\Controller\\Admin\\SwitchController::index'], null, null, null, true, false, null]],
        '/admin/switch/donnees' => [[['_route' => 'switch_datas', '_controller' => 'App\\Controller\\Admin\\SwitchController::switchDatasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/documents-techniques' => [[['_route' => 'technical_doc_index', '_controller' => 'App\\Controller\\Admin\\TechnicalDocsController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/documents-techniques/donnees' => [[['_route' => 'technical_doc_datas', '_controller' => 'App\\Controller\\Admin\\TechnicalDocsController::datasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/utilisateurs/liste' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/utilisateurs/donnees' => [[['_route' => 'user_datas', '_controller' => 'App\\Controller\\Admin\\UserController::datasAction'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/gestion-site/video' => [[['_route' => 'website_admin_video', '_controller' => 'App\\Controller\\Admin\\WebsiteAdminController::videoIntro'], null, null, null, false, false, null]],
        '/espace-etudiant/admin/gestion-site/stockage' => [[['_route' => 'website_admin_storage', '_controller' => 'App\\Controller\\Admin\\WebsiteAdminController::manageStorage'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'public_home', '_controller' => 'App\\Controller\\Front\\DefaultController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'FrameworkBundle:Redirect:redirect', 'route' => 'public_home', 'permanent' => true], null, null, null, false, false, null],
        ],
        '/secteur-animation' => [[['_route' => 'public_animation', '_controller' => 'App\\Controller\\Front\\DefaultController::animationPage'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'public_formation', '_controller' => 'App\\Controller\\Front\\DefaultController::formationPage'], null, null, null, false, false, null]],
        '/mentionLegales' => [[['_route' => 'public_mentions_legales', '_controller' => 'App\\Controller\\Front\\DefaultController::mentionsPage'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'public_cgv', '_controller' => 'App\\Controller\\Front\\DefaultController::cvgPage'], null, null, null, false, false, null]],
        '/espace-etudiant/exercices/envoyer' => [[['_route' => 'submit_exercice', '_controller' => 'App\\Controller\\Student\\ExerciceController::submitExercice'], null, ['POST' => 0], null, false, false, null]],
        '/espace-etudiant/exercices/commentaire/enregistrer' => [[['_route' => 'save_comment', '_controller' => 'App\\Controller\\Student\\ExerciceController::saveComment'], null, null, null, false, false, null]],
        '/espace-etudiant/exercices/show' => [[['_route' => 'show_file', '_controller' => 'App\\Controller\\Student\\ExerciceController::ShowDocument'], null, ['POST' => 0], null, false, false, null]],
        '/espace-etudiant/profil' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\Student\\ProfileController::index'], null, null, null, true, false, null]],
        '/espace-etudiant/profil/formulaire-avatar' => [[['_route' => 'profile_form_avatar', '_controller' => 'App\\Controller\\Student\\ProfileController::formAvatar'], null, null, null, true, false, null]],
        '/espace-etudiant/inscription/formulaire' => [[['_route' => 'subscription_form', '_controller' => 'App\\Controller\\Student\\SubscriptionController::form'], null, null, null, true, false, null]],
        '/espace-etudiant/inscription/formations' => [[['_route' => 'formation_choice', '_controller' => 'App\\Controller\\Student\\SubscriptionController::formationChoice'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/espace\\-etudiant/(?'
                    .'|admin/(?'
                        .'|corrections/exercice/([^/]++)/([^/]++)(*:237)'
                        .'|modules/(?'
                            .'|formulaire(?:/([^/]++))?(*:280)'
                            .'|suppression/([^/]++)(*:308)'
                            .'|telecharger\\-cours/([^/]++)/([^/]++)(*:352)'
                        .')'
                        .'|exercices/(?'
                            .'|formulaire(?:/([^/]++))?(*:398)'
                            .'|suppression/([^/]++)(*:426)'
                            .'|telecharger/([^/]++)/([^/]++)(*:463)'
                        .')'
                        .'|formations/(?'
                            .'|formulaire(?:/([^/]++))?(*:510)'
                            .'|suppression/([^/]++)(*:538)'
                        .')'
                        .'|utilisateurs/(?'
                            .'|form(?'
                                .'|ulaire(?:/([^/]++))?(*:590)'
                                .'|ation/([^/]++)(*:612)'
                            .')'
                            .'|suppression/(?'
                                .'|([^/]++)(*:644)'
                                .'|userformation/([^/]++)(*:674)'
                            .')'
                        .')'
                        .'|gestion\\-site/(?'
                            .'|chiffres\\-cles(?'
                                .'|(?:/([^/]++))?(*:732)'
                                .'|/suppression/([^/]++)(*:761)'
                            .')'
                            .'|articles(?'
                                .'|(?:/([^/]++))?(*:795)'
                                .'|/suppression/([^/]++)(*:824)'
                            .')'
                            .'|stockage/([^/]++)(*:850)'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ise\\-a\\-jour\\-mot\\-de\\-passe/([^/]++)/([^/]++)(*:910)'
                        .'|a\\-formation/([^/]++)(*:939)'
                    .')'
                    .'|changement\\-client/([^/]++)(*:975)'
                    .'|documents\\-techniques/(?'
                        .'|consulter/([^/]++)(*:1026)'
                        .'|formulaire(?:/([^/]++))?(*:1059)'
                        .'|enregistrer(?:/([^/]++))?(*:1093)'
                        .'|suppression/([^/]++)(*:1122)'
                    .')'
                    .'|exercices/(?'
                        .'|exercice/([^/]++)(*:1162)'
                        .'|test/([^/]++)/([^/]++)(*:1193)'
                    .')'
                    .'|inscription/(?'
                        .'|formation/checkout/([^/]++)(*:1245)'
                        .'|paiement(?:/([^/]++))?(*:1276)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        237 => [[['_route' => 'correct_exercice_form', '_controller' => 'App\\Controller\\Admin\\CorrectionController::form'], ['id', 'student'], null, null, false, true, null]],
        280 => [[['_route' => 'course_form', 'id' => null, '_controller' => 'App\\Controller\\Admin\\CourseController::form'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\Admin\\CourseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        352 => [[['_route' => 'download_file_admin_course', '_controller' => 'App\\Controller\\Admin\\CourseController::downloadAction'], ['id', 'filename'], null, null, false, true, null]],
        398 => [[['_route' => 'exercice_form', 'id' => null, '_controller' => 'App\\Controller\\Admin\\ExerciceController::form'], ['id'], null, null, false, true, null]],
        426 => [[['_route' => 'exercice_delete', '_controller' => 'App\\Controller\\Admin\\ExerciceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        463 => [[['_route' => 'download_file_admin_exo', '_controller' => 'App\\Controller\\Admin\\ExerciceController::downloadAction'], ['id', 'filename'], null, null, false, true, null]],
        510 => [[['_route' => 'formation_form', 'id' => null, '_controller' => 'App\\Controller\\Admin\\FormationController::form'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'formation_delete', '_controller' => 'App\\Controller\\Admin\\FormationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        590 => [[['_route' => 'user_form', 'id' => null, '_controller' => 'App\\Controller\\Admin\\UserController::form'], ['id'], null, null, false, true, null]],
        612 => [[['_route' => 'user_formation', '_controller' => 'App\\Controller\\Admin\\UserController::userFormation'], ['user'], null, null, false, true, null]],
        644 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        674 => [[['_route' => 'userformation_delete', '_controller' => 'App\\Controller\\Admin\\UserController::deleteUserFormation'], ['id'], ['DELETE' => 0], null, false, true, null]],
        732 => [[['_route' => 'website_admin_figure', 'id' => null, '_controller' => 'App\\Controller\\Admin\\WebsiteAdminController::keyFigures'], ['id'], null, null, false, true, null]],
        761 => [[['_route' => 'figure_delete', '_controller' => 'App\\Controller\\Admin\\WebsiteAdminController::deleteFigure'], ['id'], ['DELETE' => 0], null, false, true, null]],
        795 => [[['_route' => 'website_admin_article', 'id' => null, '_controller' => 'App\\Controller\\Admin\\WebsiteAdminController::articles'], ['id'], null, null, false, true, null]],
        824 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\Admin\\WebsiteAdminController::deleteArticle'], ['id'], ['DELETE' => 0], null, false, true, null]],
        850 => [[['_route' => 'file_delete', '_controller' => 'App\\Controller\\Admin\\WebsiteAdminController::deleteFromStorage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        910 => [[['_route' => 'security_update_password', '_controller' => 'App\\Controller\\Admin\\SecurityController::updatePassword'], ['email', 'token'], null, null, false, true, null]],
        939 => [[['_route' => 'student_course_index', '_controller' => 'App\\Controller\\Student\\CourseController::index'], ['id'], null, null, false, true, null]],
        975 => [[['_route' => 'switch_customer', '_controller' => 'App\\Controller\\Admin\\SecurityController::switchCustomer'], ['id'], null, null, false, true, null]],
        1026 => [[['_route' => 'technical_doc_view', '_controller' => 'App\\Controller\\Admin\\TechnicalDocsController::view'], ['id'], null, null, false, true, null]],
        1059 => [[['_route' => 'technical_doc_form', 'id' => null, '_controller' => 'App\\Controller\\Admin\\TechnicalDocsController::form'], ['id'], null, null, false, true, null]],
        1093 => [[['_route' => 'technical_doc_save', 'id' => null, '_controller' => 'App\\Controller\\Admin\\TechnicalDocsController::saveDocument'], ['id'], ['POST' => 0], null, false, true, null]],
        1122 => [[['_route' => 'technical_doc_delete', '_controller' => 'App\\Controller\\Admin\\TechnicalDocsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1162 => [[['_route' => 'student_exercice', '_controller' => 'App\\Controller\\Student\\ExerciceController::exercice'], ['id'], null, null, false, true, null]],
        1193 => [[['_route' => 'download_file', '_controller' => 'App\\Controller\\Student\\ExerciceController::downloadAction'], ['id', 'filename'], null, null, false, true, null]],
        1245 => [[['_route' => 'formation_checkout', '_controller' => 'App\\Controller\\Student\\SubscriptionController::formationPayment'], ['formationId'], null, null, false, true, null]],
        1276 => [
            [['_route' => 'formation_payment', 'token' => null, '_controller' => 'App\\Controller\\Student\\SubscriptionController::formationPaymentConfirm'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
