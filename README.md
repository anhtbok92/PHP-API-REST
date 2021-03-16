### PHP Script Testing

#### 1. Environment

- OS System

```angular2html
WSL2 with Ubuntu 12.04
NAME="Ubuntu"
VERSION="20.04.1 LTS (Focal Fossa)"
ID=ubuntu
ID_LIKE=debian
PRETTY_NAME="Ubuntu 20.04.1 LTS"
VERSION_ID="20.04"
HOME_URL="https://www.ubuntu.com/"
SUPPORT_URL="https://help.ubuntu.com/"
BUG_REPORT_URL="https://bugs.launchpad.net/ubuntu/"
PRIVACY_POLICY_URL="https://www.ubuntu.com/legal/terms-and-policies/privacy-policy"
VERSION_CODENAME=focal
UBUNTU_CODENAME=focal
```

- PHP Version
```angular2html$php --version
PHP 7.4.3 (cli) (built: Oct  6 2020 15:47:56) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies
```

- Package used in source code

```angular2html
php-curl
```

#### 2. Install And Run

- Step 1. install php-curl

```angular2html
sudo apt-get install php-curl
```

- Step 2. Run

```angular2html
php index.php
```

- Step 3. Check result

```angular2html
Array
(
    [0] => Array
        (
            [id] => uuid-1
            [name] => Webprovise Corp
            [cost] => 11135
            [children] => Array
                (
                    [1] => Array
                        (
                            [id] => uuid-2
                            [createdAt] => 2021-02-25T10:35:32.978Z
                            [name] => Stamm LLC
                            [parentId] => uuid-1
                            [cost] => 1429
                        )

                    [2] => Array
                        (
                            [id] => uuid-3
                            [createdAt] => 2021-02-25T15:16:30.887Z
                            [name] => Blanda, Langosh and Barton
                            [parentId] => uuid-1
                            [cost] => 3847
                        )

                    [3] => Array
                        (
                            [id] => uuid-8
                            [createdAt] => 2021-02-25T23:47:57.596Z
                            [name] => Bartell - Mosciski
                            [parentId] => uuid-1
                            [cost] => 2605
                        )

                    [4] => Array
                        (
                            [id] => uuid-18
                            [createdAt] => 2021-02-26T02:31:22.154Z
                            [name] => Walter, Schmidt and Osinski
                            [parentId] => uuid-1
                            [cost] => 2033
                        )

                )

        )

    [1] => Array
        (
            [id] => uuid-2
            [name] => Webprovise Corp
            [cost] => 3770
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => uuid-4
                            [createdAt] => 2021-02-25T06:11:47.519Z
                            [name] => Price and Sons
                            [parentId] => uuid-2
                            [cost] => 1340
                        )

                    [1] => Array
                        (
                            [id] => uuid-7
                            [createdAt] => 2021-02-25T07:56:32.335Z
                            [name] => Zieme - Mills
                            [parentId] => uuid-2
                            [cost] => 1636
                        )

                    [2] => Array
                        (
                            [id] => uuid-19
                            [createdAt] => 2021-02-25T21:06:18.777Z
                            [name] => Schneider - Adams
                            [parentId] => uuid-2
                            [cost] => 794
                        )

                )

        )

    [2] => Array
        (
            [id] => uuid-3
            [name] => Webprovise Corp
            [cost] => 11866
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => uuid-5
                            [createdAt] => 2021-02-25T13:35:57.923Z
                            [name] => Hane - Windler
                            [parentId] => uuid-3
                            [cost] => 1288
                        )

                    [1] => Array
                        (
                            [id] => uuid-6
                            [createdAt] => 2021-02-26T01:41:06.479Z
                            [name] => Vandervort - Bechtelar
                            [parentId] => uuid-3
                            [cost] => 2512
                        )

                    [2] => Array
                        (
                            [id] => uuid-9
                            [createdAt] => 2021-02-25T16:02:49.099Z
                            [name] => Kuhic - Swift
                            [parentId] => uuid-3
                            [cost] => 3086
                        )

                    [3] => Array
                        (
                            [id] => uuid-17
                            [createdAt] => 2021-02-25T11:17:52.132Z
                            [name] => Rohan, Mayer and Haley
                            [parentId] => uuid-3
                            [cost] => 4072
                        )

                    [4] => Array
                        (
                            [id] => uuid-20
                            [createdAt] => 2021-02-26T01:51:25.421Z
                            [name] => Kunde, Armstrong and Hermann
                            [parentId] => uuid-3
                            [cost] => 908
                        )

                )

        )

    [3] => Array
        (
            [id] => uuid-8
            [name] => Webprovise Corp
            [cost] => 16848
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => uuid-10
                            [createdAt] => 2021-02-26T01:39:33.438Z
                            [name] => Lockman Inc
                            [parentId] => uuid-8
                            [cost] => 4288
                        )

                    [1] => Array
                        (
                            [id] => uuid-11
                            [createdAt] => 2021-02-26T00:32:01.307Z
                            [name] => Parker - Shanahan
                            [parentId] => uuid-8
                            [cost] => 2872
                        )

                    [2] => Array
                        (
                            [id] => uuid-13
                            [createdAt] => 2021-02-25T20:45:53.518Z
                            [name] => Balistreri - Bruen
                            [parentId] => uuid-8
                            [cost] => 1686
                        )

                    [3] => Array
                        (
                            [id] => uuid-15
                            [createdAt] => 2021-02-25T18:00:26.864Z
                            [name] => Predovic and Sons
                            [parentId] => uuid-8
                            [cost] => 4725
                        )

                    [4] => Array
                        (
                            [id] => uuid-16
                            [createdAt] => 2021-02-26T01:50:50.354Z
                            [name] => Weissnat - Murazik
                            [parentId] => uuid-8
                            [cost] => 3277
                        )

                )

        )

    [4] => Array
        (
            [id] => uuid-11
            [name] => Webprovise Corp
            [cost] => 9364
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => uuid-12
                            [createdAt] => 2021-02-25T06:44:56.245Z
                            [name] => Swaniawski Inc
                            [parentId] => uuid-11
                            [cost] => 2110
                        )

                    [1] => Array
                        (
                            [id] => uuid-14
                            [createdAt] => 2021-02-25T15:22:08.098Z
                            [name] => Weimann, Runolfsson and Hand
                            [parentId] => uuid-11
                            [cost] => 7254
                        )

                )

        )

)
Total time: 2.3341679573059
```