<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku',
        'label' => 'title',
        'label_userFunc' => \Documentation\Examples\Userfuncs\Tca::class . '->haikuTitle',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'title,poem',
        'dividers2tabs' => true,
        'typeicon_classes' => [
            'default' => 'tx_examples-haiku',
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'title,season,angle',
        'maxDBListItems' => 5,
        'maxSingleDBListItems' => 20,
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0',
            ],
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'required,trim',
            ],
        ],
        'poem' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.poem',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 6,
                'softref' => 'typolink_tag,images,email[subst],url',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],

        ],
        'filename' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.filename',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'filesource' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.filesource',
            'config' => [
                'type' => 'check',
            ],
        ],
        'filestatus' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.filestatus',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'season' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.season',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'valuePicker' => [
                    'items' => [
                        0 =>
                            [
                                0 => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.season.spring',
                                1 => 'Spring',
                            ],
                        1 =>
                            [
                                0 => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.season.summer',
                                1 => 'Summer',
                            ],
                        2 =>
                            [
                                0 => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.season.autumn',
                                1 => 'Autumn',
                            ],
                        3 =>
                            [
                                0 => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.season.winter',
                                1 => 'Winter',
                            ],
                    ],
                    'mode' => '',
                ],
            ],
        ],
        'weirdness' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.weirdness',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'eval' => 'int',
                'wizards' => [
                    'specialWizard' => [
                        'type' => 'userFunc',
                        'userFunc' => \Documentation\Examples\Controller\PlusMinusWizardController::class . '->render',
                        'params' => [
                            'color' => 'green',
                        ],
                    ],
                ],
            ],
        ],
        'color' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.color',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'eval' => 'trim',
                'renderType' => 'colorpicker',
            ],
        ],
        'angle' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.angle',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim,int',
                'range' => [
                    'lower' => -90,
                    'upper' => 90,
                ],
                'default' => 0,
                'slider' => [
                    'width' => 200,
                    'step' => 10,
                ],
            ],
        ],
        // USAGE: TCA reference > $TCA array reference > ['columns'][fieldname]['config'] / TYPE: "group"
        // Demonstrates the various values the property disable_controls can take
        'image1' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image1',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/pics',
                'size' => '3',
                'maxitems' => '200',
                'minitems' => '0',
                'autoSizeMax' => 40,
            ],
        ],
        'image2' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image2',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/pics',
                'size' => '3',
                'maxitems' => '200',
                'minitems' => '0',
                'autoSizeMax' => 40,
                'fieldControl' => [
                    'elementBrowser' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'image3' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image3',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/pics',
                'size' => '3',
                'maxitems' => '200',
                'minitems' => '0',
                'autoSizeMax' => 40,
                'fieldWizard' => [
                    'fileUpload' => [
                        'disabled' => true,
                    ],
                ],

            ],
        ],
        'image4' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image4',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/pics',
                'size' => '3',
                'maxitems' => '200',
                'minitems' => '0',
                'autoSizeMax' => 40,
                'disable_controls' => 'list',
            ],
        ],
        'image5' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image5',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/pics',
                'size' => '3',
                'maxitems' => '200',
                'minitems' => '0',
                'autoSizeMax' => 40,
                'hideDeleteIcon' => true,
            ],
        ],
        'image6' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image6',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'uploadfolder' => 'uploads/pics',
                'size' => '3',
                'maxitems' => '200',
                'minitems' => '0',
                'autoSizeMax' => 40,
                'disable_controls' => 'browser,upload,list,delete',
            ],
        ],
        'image_fal_group' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image_fal_group',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'sys_file',
                'MM' => 'sys_file_reference',
                'MM_match_fields' => [
                    'fieldname' => 'image_fal_group',
                ],
                'prepend_tname' => true,
                'appearance' => [
                    'elementBrowserAllowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                    'elementBrowserType' => 'file',
                ],
                'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
                'size' => '3',
                'maxitems' => '200',
                'minitems' => '0',
                'autoSizeMax' => 40,
            ],
        ],
        'image_fal_irre' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.image_fal_irre',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image_fal_irre'
            ),
        ],
        // USAGE: TCA reference > $TCA array reference > ['columns'][fieldname]['config'] / TYPE: "select" > Examples
        // Use the following TSconfig to show the effect:
        // TCEFORM.tx_examples_haiku.reference_page.PAGE_TSCONFIG_STR = image
        'reference_page' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.reference_page',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'pages',
                'foreign_table_where' => "AND pages.title LIKE '%###PAGE_TSCONFIG_STR###%'",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'renderType' => 'selectSingle',
            ],
        ],
        'related_records' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.related_records',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'pages, tt_content',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 10,
                'suggestOptions' => [
                    'default' => [
                        'searchWholePhrase' => 1,
                    ],
                    'pages' => [
                        'searchCondition' => 'doktype = 1',
                    ],
                ],
            ],
        ],
        'related_content' => [
            'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.related_content',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'ORDER BY header ASC',
                'size' => 5,
                'minitems' => 0,
                'maxitems' => 999,
                'enableMultiSelectFilterTextfield' => true,
                'multiSelectFilterItems' => [
                    [
                        'image',
                        'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.related_content.image',
                    ],
                    [
                        'typo3',
                        'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.related_content.typo3',
                    ],
                ],
                'renderType' => 'selectMultipleSideBySide',
            ],
        ],
    ],
    'types' => [
        0 =>
            [
                'showitem' => 'hidden,title,poem,filename,season,weirdness,color,angle,--div--;LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.images,image1,image2,image3,image4,image5,image6,--div--;LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.images_fal,image_fal_group,image_fal_irre,--div--;LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.relations,reference_page,related_records,related_content',
            ],
        // NOTE: since filestatus is not used yet, let's not show it, nor the palette with filesource,
        // but it should be made to work at some point (bug in the Core?)
        //		'0' => array('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, poem, filename;;1;;3-3-3, filestatus, season;;;;4-4-4, weirdness, color'),
    ],
    /*
     * NOTE: use the filesource flag only when the problems of static_write have been solved
        'palettes' => array(
            '1' => array('showitem' => 'filesource'),
        ),
     */
];
