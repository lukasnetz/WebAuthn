<?php

/*
 * WebAuthn extension for TYPO3 CMS
 * Copyright (C) 2019 CARL von CHIARI GmbH
 *
 * This file is part of the TYPO3 CMS project.
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 3
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cvcwebauthn_keys');

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Cvc.Typo3.'.$_EXTKEY,
        'system',
        'WebAuthn',
        'after:BeuserTxBeuser',
        [
            'Backend' => 'index,create,delete',
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:'.$_EXTKEY.'/ext_icon.svg',
            'labels' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/locallang_mod.xml',
        ]
    );
}
