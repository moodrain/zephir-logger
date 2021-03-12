<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Logger',
    'file' => '/home/muyu/app/logger/logger/log.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Log',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'path',
          'default' => 
          array (
            'type' => 'string',
            'value' => './',
            'file' => '/home/muyu/app/logger/logger/log.zep',
            'line' => 5,
            'char' => 29,
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 6,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'handlers',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/home/muyu/app/logger/logger/log.zep',
            'line' => 6,
            'char' => 33,
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 8,
          'char' => 10,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'setPath',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 8,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'static-property',
                  'operator' => 'assign',
                  'variable' => 'self',
                  'property' => 'path',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'path',
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 10,
                    'char' => 30,
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 10,
                  'char' => 30,
                ),
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 11,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 8,
          'last-line' => 13,
          'char' => 26,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'getPath',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'static-property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'self',
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 15,
                  'char' => 26,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'path',
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 15,
                  'char' => 26,
                ),
                'file' => '/home/muyu/app/logger/logger/log.zep',
                'line' => 15,
                'char' => 26,
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 16,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 13,
          'last-line' => 18,
          'char' => 26,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'setHandler',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'level',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 18,
              'char' => 51,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'callback',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 18,
              'char' => 65,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'static-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'self',
                  'property' => 'handlers',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'level',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 20,
                      'char' => 33,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'callback',
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 20,
                    'char' => 45,
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 20,
                  'char' => 45,
                ),
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 21,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 18,
          'last-line' => 23,
          'char' => 26,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'write',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'level',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 23,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 23,
              'char' => 62,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'pass',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 25,
                    'char' => 25,
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 25,
                  'char' => 25,
                ),
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 26,
              'char' => 13,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'handlers',
                  'expr' => 
                  array (
                    'type' => 'static-property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'self',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 26,
                      'char' => 40,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'handlers',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 26,
                      'char' => 40,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 26,
                    'char' => 40,
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 26,
                  'char' => 40,
                ),
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 27,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'handlers',
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 27,
                    'char' => 26,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'level',
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 27,
                    'char' => 32,
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 27,
                  'char' => 34,
                ),
                'file' => '/home/muyu/app/logger/logger/log.zep',
                'line' => 27,
                'char' => 34,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'variable',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'fun',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'handlers',
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 28,
                          'char' => 31,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'level',
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 28,
                          'char' => 37,
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 28,
                        'char' => 38,
                      ),
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 28,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 29,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'pass',
                      'expr' => 
                      array (
                        'type' => 'cast',
                        'left' => 'bool',
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'fun',
                          'call-type' => 2,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/home/muyu/app/logger/logger/log.zep',
                                'line' => 29,
                                'char' => 44,
                              ),
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 29,
                              'char' => 44,
                            ),
                          ),
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 29,
                          'char' => 45,
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 29,
                        'char' => 45,
                      ),
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 29,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 30,
                  'char' => 9,
                ),
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 31,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'pass',
                'file' => '/home/muyu/app/logger/logger/log.zep',
                'line' => 31,
                'char' => 17,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'string',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'path',
                      'expr' => 
                      array (
                        'type' => 'cast',
                        'left' => 'string',
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'rtrim',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'static-property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'self',
                                  'file' => '/home/muyu/app/logger/logger/log.zep',
                                  'line' => 32,
                                  'char' => 52,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'path',
                                  'file' => '/home/muyu/app/logger/logger/log.zep',
                                  'line' => 32,
                                  'char' => 52,
                                ),
                                'file' => '/home/muyu/app/logger/logger/log.zep',
                                'line' => 32,
                                'char' => 52,
                              ),
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 32,
                              'char' => 52,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => '/',
                                'file' => '/home/muyu/app/logger/logger/log.zep',
                                'line' => 32,
                                'char' => 55,
                              ),
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 32,
                              'char' => 55,
                            ),
                          ),
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 32,
                          'char' => 56,
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 32,
                        'char' => 56,
                      ),
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 32,
                      'char' => 56,
                    ),
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 33,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'string',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'file',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'path',
                            'file' => '/home/muyu/app/logger/logger/log.zep',
                            'line' => 33,
                            'char' => 32,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '/',
                            'file' => '/home/muyu/app/logger/logger/log.zep',
                            'line' => 33,
                            'char' => 36,
                          ),
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 33,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'date',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => 'Y-m-d',
                                'file' => '/home/muyu/app/logger/logger/log.zep',
                                'line' => 33,
                                'char' => 48,
                              ),
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 33,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 33,
                          'char' => 49,
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 33,
                        'char' => 49,
                      ),
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 33,
                      'char' => 49,
                    ),
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 34,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'variable',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'source',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'fopen',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'file',
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 34,
                              'char' => 36,
                            ),
                            'file' => '/home/muyu/app/logger/logger/log.zep',
                            'line' => 34,
                            'char' => 36,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'a',
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 34,
                              'char' => 39,
                            ),
                            'file' => '/home/muyu/app/logger/logger/log.zep',
                            'line' => 34,
                            'char' => 39,
                          ),
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 34,
                        'char' => 40,
                      ),
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 34,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 35,
                  'char' => 18,
                ),
                3 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'fwrite',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'source',
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 35,
                          'char' => 26,
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 35,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'date',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'string',
                                          'value' => 'Y-m-d H:i:s',
                                          'file' => '/home/muyu/app/logger/logger/log.zep',
                                          'line' => 35,
                                          'char' => 44,
                                        ),
                                        'file' => '/home/muyu/app/logger/logger/log.zep',
                                        'line' => 35,
                                        'char' => 44,
                                      ),
                                    ),
                                    'file' => '/home/muyu/app/logger/logger/log.zep',
                                    'line' => 35,
                                    'char' => 46,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ' [',
                                    'file' => '/home/muyu/app/logger/logger/log.zep',
                                    'line' => 35,
                                    'char' => 51,
                                  ),
                                  'file' => '/home/muyu/app/logger/logger/log.zep',
                                  'line' => 35,
                                  'char' => 51,
                                ),
                                'right' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'ucfirst',
                                  'call-type' => 1,
                                  'parameters' => 
                                  array (
                                    0 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'level',
                                        'file' => '/home/muyu/app/logger/logger/log.zep',
                                        'line' => 35,
                                        'char' => 66,
                                      ),
                                      'file' => '/home/muyu/app/logger/logger/log.zep',
                                      'line' => 35,
                                      'char' => 66,
                                    ),
                                  ),
                                  'file' => '/home/muyu/app/logger/logger/log.zep',
                                  'line' => 35,
                                  'char' => 68,
                                ),
                                'file' => '/home/muyu/app/logger/logger/log.zep',
                                'line' => 35,
                                'char' => 68,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ']: ',
                                'file' => '/home/muyu/app/logger/logger/log.zep',
                                'line' => 35,
                                'char' => 74,
                              ),
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 35,
                              'char' => 74,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'message',
                              'file' => '/home/muyu/app/logger/logger/log.zep',
                              'line' => 35,
                              'char' => 84,
                            ),
                            'file' => '/home/muyu/app/logger/logger/log.zep',
                            'line' => 35,
                            'char' => 84,
                          ),
                          'right' => 
                          array (
                            'type' => 'constant',
                            'value' => 'PHP_EOL',
                            'file' => '/home/muyu/app/logger/logger/log.zep',
                            'line' => 35,
                            'char' => 93,
                          ),
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 35,
                          'char' => 93,
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 35,
                        'char' => 93,
                      ),
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 35,
                    'char' => 94,
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 36,
                  'char' => 18,
                ),
                4 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'fclose',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'source',
                          'file' => '/home/muyu/app/logger/logger/log.zep',
                          'line' => 36,
                          'char' => 26,
                        ),
                        'file' => '/home/muyu/app/logger/logger/log.zep',
                        'line' => 36,
                        'char' => 26,
                      ),
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 36,
                    'char' => 27,
                  ),
                  'file' => '/home/muyu/app/logger/logger/log.zep',
                  'line' => 37,
                  'char' => 9,
                ),
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 38,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 23,
          'last-line' => 40,
          'char' => 26,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'debug',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 40,
              'char' => 48,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'self',
                'dynamic' => 0,
                'name' => 'write',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'debug',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 42,
                      'char' => 26,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 42,
                    'char' => 26,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 42,
                      'char' => 35,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 42,
                    'char' => 35,
                  ),
                ),
                'file' => '/home/muyu/app/logger/logger/log.zep',
                'line' => 42,
                'char' => 36,
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 43,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 40,
          'last-line' => 45,
          'char' => 26,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'info',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 45,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'self',
                'dynamic' => 0,
                'name' => 'write',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'info',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 47,
                      'char' => 25,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 47,
                    'char' => 25,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 47,
                      'char' => 34,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 47,
                    'char' => 34,
                  ),
                ),
                'file' => '/home/muyu/app/logger/logger/log.zep',
                'line' => 47,
                'char' => 35,
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 48,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 45,
          'last-line' => 50,
          'char' => 26,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'warn',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 50,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'self',
                'dynamic' => 0,
                'name' => 'write',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'warning',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 52,
                      'char' => 28,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 52,
                    'char' => 28,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 52,
                      'char' => 37,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 52,
                    'char' => 37,
                  ),
                ),
                'file' => '/home/muyu/app/logger/logger/log.zep',
                'line' => 52,
                'char' => 38,
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 53,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 50,
          'last-line' => 55,
          'char' => 26,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'error',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 55,
              'char' => 48,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'self',
                'dynamic' => 0,
                'name' => 'write',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'error',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 57,
                      'char' => 26,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 57,
                    'char' => 26,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/muyu/app/logger/logger/log.zep',
                      'line' => 57,
                      'char' => 35,
                    ),
                    'file' => '/home/muyu/app/logger/logger/log.zep',
                    'line' => 57,
                    'char' => 35,
                  ),
                ),
                'file' => '/home/muyu/app/logger/logger/log.zep',
                'line' => 57,
                'char' => 36,
              ),
              'file' => '/home/muyu/app/logger/logger/log.zep',
              'line' => 58,
              'char' => 5,
            ),
          ),
          'file' => '/home/muyu/app/logger/logger/log.zep',
          'line' => 55,
          'last-line' => 60,
          'char' => 26,
        ),
      ),
      'file' => '/home/muyu/app/logger/logger/log.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/home/muyu/app/logger/logger/log.zep',
    'line' => 3,
    'char' => 5,
  ),
);