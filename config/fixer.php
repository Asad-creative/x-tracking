<?php

return [
    'rules' => [
        'psr0' => false,
        '@PSR2' => true,
        'blank_line_after_namespace' => true, // There MUST be one blank line after the namespace declaration.
        'braces' => true, // The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
        'class_definition' => true, // Whitespace around the keywords of a class, trait or interfaces definition should be one space.
        'elseif' => true, //The keyword elseif should be used instead of else if so that all control keywords look like single words.
        'function_declaration' => true, // Spaces should be properly placed in a function declaration.
        'indentation_type' => true, // Code MUST use configured indentation type.
        'line_ending' => true, // All PHP files must use same line ending.
        'lowercase_constants' => true, // The PHP constants true, false, and null MUST be in lower case.
        'lowercase_keywords' => true, // PHP keywords MUST be in lower case.
        'method_argument_space' => [
            'ensure_fully_multiline' => true, ], // In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma. Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
        'no_break_comment' => true, // There must be a comment when fall-through is intentional in a non-empty case body.
        'no_closing_tag' => true, // The php closing tag MUST be omitted from files containing only PHP.
        'no_spaces_after_function_name' => true, // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
        'no_spaces_inside_parenthesis' => true, // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
        'no_trailing_whitespace' => true, // Remove trailing whitespace at the end of non-blank lines.
        'no_trailing_whitespace_in_comment' => true, // There MUST be no trailing spaces inside comment or PHPDoc.
        'single_blank_line_at_eof' => true, // A PHP file without end tag must always end with a single empty line feed.
        'single_class_element_per_statement' => [
            'elements' => ['property'],
        ], // There MUST NOT be more than one property or constant declared per statement.
        'single_import_per_statement' => true, // There MUST be one use keyword per declaration.
        'single_line_after_imports' => true, // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
        'switch_case_semicolon_to_colon' => true, // A case should be followed by a colon and not a semicolon.
        'switch_case_space' => true, // Removes extra spaces between colon and case value.
        'visibility_required' => true, // Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.
        'encoding' => true, // PHP code MUST use only UTF-8 without BOM (remove BOM).
        'full_opening_tag' => true, // PHP code must use the long <?php tags or short-echo <?= tags and not other tag variations.
        ],
];
