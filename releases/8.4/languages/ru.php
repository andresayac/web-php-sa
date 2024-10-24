<?php

return [
    'common_header' => 'PHP 8.4 — большое обновление языка PHP. Оно содержит множество новых возможностей, таких как хуки свойств, асимметричная область видимости свойств, обновление DOM API, улучшена производительность, исправлены ошибки и многое другое.',
    'documentation' => 'Документация',
    'main_title' => 'выпущен!',
    'main_subtitle' => 'PHP 8.4 — большое обновление языка PHP.<br class="display-none-md"> Оно содержит множество новых возможностей, таких как хуки свойств, асимметричная область видимости свойств, обновление DOM API, улучшена производительность, исправлены ошибки и многое другое.',
    'upgrade_now' => 'Переходите на PHP 8.4!',

    'property_hooks_title' => 'Хуки свойств',
    'asymmetric_visibility_title' => 'Асимметричная область видимости свойств',
    'deprecated_attribute_title' => 'Атрибут <code>#[\Deprecated]</code>',
    'deprecated_attribute_description' => 'Новый атрибут <code>#[\Deprecated]</code> расширяет существующий механизм объявления сущности устаревшей для пользовательских функций, методов и констант классов.',
    'dom_additions_html5_title' => 'Новые возможности ext-dom и поддержка HTML5',
    'dom_additions_html5_description' => 'Добавлены классы <code>Dom\HTMLDocument</code>, <code>Dom\XMLDocument</code>, а также новые методы <code>DOMNode::compareDocumentPosition()</code>, <code>DOMXPath::registerPhpFunctionNS()</code>, <code>DOMXPath::quote()</code> и <code>XSLTProcessor::registerPHPFunctionNS()</code>.',
    'new_array_find_title' => 'Новые функции <code>array_*()</code>',
    'new_array_find_description' => 'Добавлены функции <code>array_find()</code>, <code>array_find_key()</code>, <code>array_any()</code> и <code>array_all()</code>.',
    'pdo_driver_specific_parsers_title' => 'SQL-парсеры, специфичные для драйверов PDO',
    'pdo_driver_specific_parsers_description' => 'Добавлены дочерние классы <code>Pdo\Dblib</code>, <code>Pdo\Firebird</code>, <code>Pdo\MySql</code>, <code>Pdo\Odbc</code>, <code>Pdo\Sqlite</code> драйверов, наследующие <code>PDO</code>.',
    'new_without_parentheses_title' => '<code>new MyClass()->method()</code> без скобок',

    'new_classes_title' => 'Новые классы, интерфейсы и функции',
    'new_core_functions' => 'Добавлена функция <code>request_parse_body()</code>.',
    'new_bcmath_functions' => 'Добавлены функции <code>bcceil()</code>, <code>bcdivmod()</code>, <code>bcfloor()</code> и <code>bcround()</code>.',
    'new_date_functions' => 'Добавлены методы <code>DateTime::createFromTimestamp()</code>, <code>DateTime::getMicrosecond()</code>, <code>DateTime::setMicrosecond()</code>, <code>DateTimeImmutable::createFromTimestamp()</code>, <code>DateTimeImmutable::getMicrosecond()</code> и <code>DateTimeImmutable::setMicrosecond()</code>.',
    'new_mb_functions' => 'Добавлены функции <code>mb_trim()</code>, <code>mb_ltrim()</code>, <code>mb_rtrim()</code>, <code>mb_ucfirst()</code> и <code>mb_lcfirst()</code>.',
    'new_pcntl_functions' => 'Добавлены функции <code>pcntl_getcpu()</code>, <code>pcntl_getcpuaffinity()</code>, <code>pcntl_getqos_class()</code>, <code>pcntl_setns()</code> и <code>pcntl_waitid()</code>.',
    'new_reflection_functions' => 'Добавлены методы <code>ReflectionClassConstant::isDeprecated()</code>, <code>ReflectionGenerator::isClosed()</code> и <code>ReflectionProperty::isDynamic()</code>.',
    'new_standard_functions' => 'Добавлены функции <code>http_get_last_response_headers()</code>, <code>http_clear_last_response_headers()</code>, <code>fpow()</code>.',
    'new_xml_functions' => 'Добавлены методы <code>XMLReader::fromStream()</code>, <code>XMLReader::fromUri()</code>, <code>XMLReader::fromString()</code>, <code>XMLWriter::toStream()</code>, <code>XMLWriter::toUri()</code> и <code>XMLWriter::toMemory()</code>.',

    'bc_title' => 'Устаревшая функциональность и изменения в обратной совместимости',
    'bc_pecl' => 'Модули IMAP, OCI8, PDO_OCI и pspell перенесены из ядра в PECL.',
    'bc_nullable_parameter_types' => 'Типы параметров, неявно допускающие значение <code>null</code> объявлены устаревшими.',
    'bc_classname' => 'Использование <code>_</code> в качестве имени класса объявлено устаревшим.',
    'bc_zero_raised_to_negative_number' => 'Возведение нуля в степень отрицательного числа объявлено устаревшим.',
    'bc_gmp' => 'Класс <code>GMP</code> теперь является окончательным.',
    'bc_mysqli_constants' => 'Удалены константы <code>MYSQLI_SET_CHARSET_DIR</code>, <code>MYSQLI_STMT_ATTR_PREFETCH_ROWS</code>, <code>MYSQLI_CURSOR_TYPE_FOR_UPDATE</code>, <code>MYSQLI_CURSOR_TYPE_SCROLLABLE</code> и <code>MYSQLI_TYPE_INTERVAL</code>.',
    'bc_mysqli_functions' => 'Функции <code>mysqli_ping()</code>, <code>mysqli_kill()</code>, <code>mysqli_refresh()</code>, методы <code>mysqli::ping()</code>, <code>mysqli::kill()</code>, <code>mysqli::refresh()</code> и константы <code>MYSQLI_REFRESH_*</code> объявлены устаревшими.',
    'bc_standard' => 'Функции <code>stream_bucket_make_writeable()</code> и <code>stream_bucket_new()</code> теперь возвращают экземпляр класса <code>StreamBucket</code> вместо <code>stdClass</code>.',
    'bc_core' => 'Языковая конструкция <code>exit()</code> теперь является функцией.',
    'bc_warnings' => 'Константа <code>E_STRICT</code> объявлена устаревшей.',

    'footer_title' => 'Выше производительность, лучше синтаксис, надёжнее система типов.',
    'footer_description' => '<p>Для загрузки исходного кода PHP 8.3 посетите страницу <a href="/downloads">Downloads</a>. Бинарные файлы Windows находятся на сайте <a href="https://windows.php.net/download">PHP for Windows</a>. Список изменений перечислен на странице <a href="/ChangeLog-8.php#PHP_8_4">ChangeLog</a>.</p>
        <p><a href="/manual/ru/migration84.php">Руководство по миграции</a> доступно в разделе документации. Ознакомьтесь с ним, чтобы узнать обо всех новых возможностях и изменениях, затрагивающих обратную совместимость.</p>',
];
