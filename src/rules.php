<?php

return [
    '@PHP80Migration'             => true,
    '@PHP81Migration'             => true,
    '@PhpCsFixer'                 => true,
    '@PSR12'                      => true,
    'binary_operator_spaces'      => [
        'operators' => [
            '=>' => 'align_by_scope',
        ],
    ],
    'blank_line_before_statement' => [
        'statements' => [
            'continue',
            'declare',
            'default',
            'return',
            'throw',
            'try',
            'while',
        ],
    ],

    'blank_line_between_import_groups'                 => false,
    'braces'                                           => [
        'allow_single_line_anonymous_class_with_empty_body' => true,
        'allow_single_line_closure'                         => true,
    ],
    'concat_space'                                     => [
        'spacing' => 'one',
    ],
    'global_namespace_import'                          => [
        'import_constants' => false,
        'import_functions' => false,
        'import_classes'   => false,
    ],
    'method_chaining_indentation'                      => false,
    'no_break_comment'                                 => false,
    'no_superfluous_phpdoc_tags'                       => true,
    'nullable_type_declaration_for_default_null_value' => true,
    'ordered_class_elements'                           => ['order' => [
        'use_trait',
        'case',
        'constant_public',
        'constant_protected',
        'constant_private',
        'property_public_static',
        'property_protected_static',
        'property_private_static',
        'property_public',
        'property_protected',
        'property_private',
        'construct',
    ]],
    'ordered_imports'                                  => [
        'imports_order' => [
            'class',
            'function',
            'const',
        ],
    ],
    'trailing_comma_in_multiline'                      => [
        'after_heredoc' => true,
        'elements'      => [
            'arrays',
            'arguments',
        ],
    ],
    'yoda_style'                                       => [
        'equal'            => false,
        'identical'        => false,
        'less_and_greater' => false,
    ],
];
