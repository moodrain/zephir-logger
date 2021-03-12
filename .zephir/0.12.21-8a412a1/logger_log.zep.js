[
    {
        "type": "namespace",
        "name": "Logger",
        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Log",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private",
                        "static"
                    ],
                    "type": "property",
                    "name": "path",
                    "default": {
                        "type": "string",
                        "value": ".\/",
                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                        "line": 5,
                        "char": 29
                    },
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 6,
                    "char": 11
                },
                {
                    "visibility": [
                        "private",
                        "static"
                    ],
                    "type": "property",
                    "name": "handlers",
                    "default": {
                        "type": "empty-array",
                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                        "line": 6,
                        "char": 33
                    },
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 8,
                    "char": 10
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "setPath",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "path",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 8,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "static-property",
                                    "operator": "assign",
                                    "variable": "self",
                                    "property": "path",
                                    "expr": {
                                        "type": "variable",
                                        "value": "path",
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 10,
                                        "char": 30
                                    },
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 10,
                                    "char": 30
                                }
                            ],
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 11,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 8,
                    "last-line": 13,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getPath",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "static-property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "self",
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 15,
                                    "char": 26
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "path",
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 15,
                                    "char": 26
                                },
                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                "line": 15,
                                "char": 26
                            },
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 16,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 13,
                    "last-line": 18,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "setHandler",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "level",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 18,
                            "char": 51
                        },
                        {
                            "type": "parameter",
                            "name": "callback",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 18,
                            "char": 65
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "static-property-array-index",
                                    "operator": "assign",
                                    "variable": "self",
                                    "property": "handlers",
                                    "index-expr": [
                                        {
                                            "type": "variable",
                                            "value": "level",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 20,
                                            "char": 33
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "callback",
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 20,
                                        "char": 45
                                    },
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 20,
                                    "char": 45
                                }
                            ],
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 21,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 18,
                    "last-line": 23,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "write",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "level",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 23,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 23,
                            "char": 62
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "bool",
                            "variables": [
                                {
                                    "variable": "pass",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 25,
                                        "char": 25
                                    },
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 25,
                                    "char": 25
                                }
                            ],
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 26,
                            "char": 13
                        },
                        {
                            "type": "declare",
                            "data-type": "array",
                            "variables": [
                                {
                                    "variable": "handlers",
                                    "expr": {
                                        "type": "static-property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "self",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 26,
                                            "char": 40
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "handlers",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 26,
                                            "char": 40
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 26,
                                        "char": 40
                                    },
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 26,
                                    "char": 40
                                }
                            ],
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 27,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "handlers",
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 27,
                                        "char": 26
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "level",
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 27,
                                        "char": 32
                                    },
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 27,
                                    "char": 34
                                },
                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                "line": 27,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "fun",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "handlers",
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 28,
                                                    "char": 31
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "level",
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 28,
                                                    "char": 37
                                                },
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 28,
                                                "char": 38
                                            },
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 28,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 29,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "pass",
                                            "expr": {
                                                "type": "cast",
                                                "left": "bool",
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "fun",
                                                    "call-type": 2,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                "line": 29,
                                                                "char": 44
                                                            },
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 29,
                                                            "char": 44
                                                        }
                                                    ],
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 29,
                                                    "char": 45
                                                },
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 29,
                                                "char": 45
                                            },
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 29,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 30,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 31,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "pass",
                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                "line": 31,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "string",
                                    "variables": [
                                        {
                                            "variable": "path",
                                            "expr": {
                                                "type": "cast",
                                                "left": "string",
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "rtrim",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "static-property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "self",
                                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                    "line": 32,
                                                                    "char": 52
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "path",
                                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                    "line": 32,
                                                                    "char": 52
                                                                },
                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                "line": 32,
                                                                "char": 52
                                                            },
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 32,
                                                            "char": 52
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "\/",
                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                "line": 32,
                                                                "char": 55
                                                            },
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 32,
                                                            "char": 55
                                                        }
                                                    ],
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 32,
                                                    "char": 56
                                                },
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 32,
                                                "char": 56
                                            },
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 32,
                                            "char": 56
                                        }
                                    ],
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 33,
                                    "char": 18
                                },
                                {
                                    "type": "declare",
                                    "data-type": "string",
                                    "variables": [
                                        {
                                            "variable": "file",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "path",
                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                        "line": 33,
                                                        "char": 32
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "\/",
                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                        "line": 33,
                                                        "char": 36
                                                    },
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 33,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "date",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "Y-m-d",
                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                "line": 33,
                                                                "char": 48
                                                            },
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 33,
                                                            "char": 48
                                                        }
                                                    ],
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 33,
                                                    "char": 49
                                                },
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 33,
                                                "char": 49
                                            },
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 33,
                                            "char": 49
                                        }
                                    ],
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 34,
                                    "char": 15
                                },
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "source",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "fopen",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "file",
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 34,
                                                            "char": 36
                                                        },
                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                        "line": 34,
                                                        "char": 36
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "a",
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 34,
                                                            "char": 39
                                                        },
                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                        "line": 34,
                                                        "char": 39
                                                    }
                                                ],
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 34,
                                                "char": 40
                                            },
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 34,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 35,
                                    "char": 18
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "fwrite",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "source",
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 35,
                                                    "char": 26
                                                },
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 35,
                                                "char": 26
                                            },
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "fcall",
                                                                        "name": "date",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "string",
                                                                                    "value": "Y-m-d H:i:s",
                                                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                                    "line": 35,
                                                                                    "char": 44
                                                                                },
                                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                                "line": 35,
                                                                                "char": 44
                                                                            }
                                                                        ],
                                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                        "line": 35,
                                                                        "char": 46
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": " [",
                                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                        "line": 35,
                                                                        "char": 51
                                                                    },
                                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                    "line": 35,
                                                                    "char": 51
                                                                },
                                                                "right": {
                                                                    "type": "fcall",
                                                                    "name": "ucfirst",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "variable",
                                                                                "value": "level",
                                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                                "line": 35,
                                                                                "char": 66
                                                                            },
                                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                            "line": 35,
                                                                            "char": 66
                                                                        }
                                                                    ],
                                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                    "line": 35,
                                                                    "char": 68
                                                                },
                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                "line": 35,
                                                                "char": 68
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "]: ",
                                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                                "line": 35,
                                                                "char": 74
                                                            },
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 35,
                                                            "char": 74
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "message",
                                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                            "line": 35,
                                                            "char": 84
                                                        },
                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                        "line": 35,
                                                        "char": 84
                                                    },
                                                    "right": {
                                                        "type": "constant",
                                                        "value": "PHP_EOL",
                                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                        "line": 35,
                                                        "char": 93
                                                    },
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 35,
                                                    "char": 93
                                                },
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 35,
                                                "char": 93
                                            }
                                        ],
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 35,
                                        "char": 94
                                    },
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 36,
                                    "char": 18
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "fclose",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "source",
                                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                    "line": 36,
                                                    "char": 26
                                                },
                                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                                "line": 36,
                                                "char": 26
                                            }
                                        ],
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 36,
                                        "char": 27
                                    },
                                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                    "line": 37,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 38,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 23,
                    "last-line": 40,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "debug",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 40,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "self",
                                "dynamic": 0,
                                "name": "write",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "debug",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 42,
                                            "char": 26
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 42,
                                        "char": 26
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 42,
                                            "char": 35
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 42,
                                        "char": 35
                                    }
                                ],
                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                "line": 42,
                                "char": 36
                            },
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 43,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 40,
                    "last-line": 45,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "info",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 45,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "self",
                                "dynamic": 0,
                                "name": "write",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "info",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 47,
                                            "char": 25
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 47,
                                        "char": 25
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 47,
                                            "char": 34
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 47,
                                        "char": 34
                                    }
                                ],
                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                "line": 47,
                                "char": 35
                            },
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 48,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 45,
                    "last-line": 50,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "warn",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 50,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "self",
                                "dynamic": 0,
                                "name": "write",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "warning",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 52,
                                            "char": 28
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 52,
                                        "char": 28
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 52,
                                            "char": 37
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 52,
                                        "char": 37
                                    }
                                ],
                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                "line": 52,
                                "char": 38
                            },
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 53,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 50,
                    "last-line": 55,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "error",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 55,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "self",
                                "dynamic": 0,
                                "name": "write",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "error",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 57,
                                            "char": 26
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 57,
                                        "char": 26
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                            "line": 57,
                                            "char": 35
                                        },
                                        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                        "line": 57,
                                        "char": 35
                                    }
                                ],
                                "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                                "line": 57,
                                "char": 36
                            },
                            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                            "line": 58,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
                    "line": 55,
                    "last-line": 60,
                    "char": 26
                }
            ],
            "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/home\/muyu\/app\/logger\/logger\/log.zep",
        "line": 3,
        "char": 5
    }
]