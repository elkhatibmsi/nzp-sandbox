<?php

/**
 * @file
 * Provides an array with the currently available process plugins for migrate.
 */

$plugin_list = [
  "d7_blocked_ips" => [
    "requirements_met" => TRUE,
    "id" => "d7_blocked_ips",
    "source_module" => "system",
    "class" => "Drupal\ban\Plugin\migrate\source\d7\BlockedIps",
    "provider" => [
      0 => "ban",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "block" => [
    "requirements_met" => TRUE,
    "id" => "block",
    "source_module" => "block",
    "class" => "Drupal\block\Plugin\migrate\source\Block",
    "provider" => [
      0 => "block",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_block_custom" => [
    "requirements_met" => TRUE,
    "id" => "d7_block_custom",
    "source_module" => "block",
    "class" => "Drupal\block_content\Plugin\migrate\source\d7\BlockCustom",
    "provider" => [
      0 => "block_content",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_color" => [
    "requirements_met" => TRUE,
    "id" => "d7_color",
    "source_module" => "color",
    "class" => "Drupal\color\Plugin\migrate\source\d7\Color",
    "provider" => [
      0 => "color",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_comment" => [
    "requirements_met" => TRUE,
    "id" => "d7_comment",
    "source_module" => "comment",
    "class" => "Drupal\comment\Plugin\migrate\source\d7\Comment",
    "provider" => [
      0 => "comment",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_comment_type" => [
    "requirements_met" => TRUE,
    "id" => "d7_comment_type",
    "source_module" => "comment",
    "class" => "Drupal\comment\Plugin\migrate\source\d7\CommentType",
    "provider" => [
      0 => "comment",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "authmap" => [
    "requirements_met" => TRUE,
    "id" => "authmap",
    "source_module" => "user",
    "class" => "Drupal\externalauth\Plugin\migrate\source\Authmap",
    "provider" => [
      0 => "externalauth",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_field_instance" => [
    "requirements_met" => TRUE,
    "id" => "d7_field_instance",
    "source_module" => "field",
    "class" => "Drupal\field\Plugin\migrate\source\d7\FieldInstance",
    "provider" => [
      0 => "field",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_field_instance_per_form_display" => [
    "requirements_met" => TRUE,
    "id" => "d7_field_instance_per_form_display",
    "source_module" => "field",
    "class" => "Drupal\field\Plugin\migrate\source\d7\FieldInstancePerFormDisplay",
    "provider" => [
      0 => "field",
      2 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_field_instance_per_view_mode" => [
    "requirements_met" => TRUE,
    "id" => "d7_field_instance_per_view_mode",
    "source_module" => "field",
    "class" => "Drupal\field\Plugin\migrate\source\d7\FieldInstancePerViewMode",
    "provider" => [
      0 => "field",
      2 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_view_mode" => [
    "requirements_met" => TRUE,
    "id" => "d7_view_mode",
    "source_module" => "field",
    "class" => "Drupal\field\Plugin\migrate\source\d7\ViewMode",
    "provider" => [
      0 => "field",
      2 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_field" => [
    "requirements_met" => TRUE,
    "id" => "d7_field",
    "source_module" => "field_sql_storage",
    "class" => "Drupal\field\Plugin\migrate\source\d7\Field",
    "provider" => [
      0 => "field",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_field_group" => [
    "requirements_met" => TRUE,
    "id" => "d7_field_group",
    "source_module" => "field_group",
    "destination_module" => "field_group",
    "class" => "Drupal\field_group_migrate\Plugin\migrate\source\d7\FieldGroup",
    "provider" => [
      0 => "field_group_migrate",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_file" => [
    "requirements_met" => TRUE,
    "id" => "d7_file",
    "source_module" => "file",
    "class" => "Drupal\file\Plugin\migrate\source\d7\File",
    "provider" => [
      0 => "file",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_filter_format" => [
    "requirements_met" => TRUE,
    "id" => "d7_filter_format",
    "source_module" => "filter",
    "class" => "Drupal\filter\Plugin\migrate\source\d7\FilterFormat",
    "provider" => [
      0 => "filter",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_image_styles" => [
    "requirements_met" => TRUE,
    "id" => "d7_image_styles",
    "source_module" => "image",
    "class" => "Drupal\image\Plugin\migrate\source\d7\ImageStyles",
    "provider" => [
      0 => "image",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_language_content_settings" => [
    "requirements_met" => TRUE,
    "id" => "d7_language_content_settings",
    "source_module" => "locale",
    "class" => "Drupal\language\Plugin\migrate\source\d7\LanguageContentSettings",
    "provider" => [
      0 => "language",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "language" => [
    "requirements_met" => TRUE,
    "id" => "language",
    "source_module" => "locale",
    "class" => "Drupal\language\Plugin\migrate\source\Language",
    "provider" => [
      0 => "language",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "empty" => [
    "requirements_met" => TRUE,
    "id" => "empty",
    "source_module" => "migrate",
    "class" => "Drupal\migrate\Plugin\migrate\source\EmptySource",
    "provider" => [
      0 => "migrate",
      2 => "core",
    ],
  ],
  "embedded_data" => [
    "requirements_met" => TRUE,
    "id" => "embedded_data",
    "source_module" => "migrate",
    "class" => "Drupal\migrate\Plugin\migrate\source\EmbeddedDataSource",
    "provider" => [
      0 => "migrate",
      2 => "core",
    ],
  ],
  "content_entity:block_content" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "block_content",
  ],
  "content_entity:comment" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "comment",
  ],
  "content_entity:content_moderation_state" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "content_moderation_state",
  ],
  "content_entity:field_collection_item" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "field_collection_item",
  ],
  "content_entity:file" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "file",
  ],
  "content_entity:media" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "media",
  ],
  "content_entity:node" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "node",
  ],
  "content_entity:paragraphs_library_item" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "paragraphs_library_item",
  ],
  "content_entity:poll" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "poll",
  ],
  "content_entity:poll_choice" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "poll_choice",
  ],
  "content_entity:profile" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "profile",
  ],
  "content_entity:redirect" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "redirect",
  ],
  "content_entity:salesforce_mapped_object" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "salesforce_mapped_object",
  ],
  "content_entity:shortcut" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "shortcut",
  ],
  "content_entity:taxonomy_term" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "taxonomy_term",
  ],
  "content_entity:token_custom" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "token_custom",
  ],
  "content_entity:user" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "user",
  ],
  "content_entity:vote_result" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "vote_result",
  ],
  "content_entity:vote" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "vote",
  ],
  "content_entity:menu_link_content" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "menu_link_content",
  ],
  "content_entity:paragraph" => [
    "requirements_met" => TRUE,
    "id" => "content_entity",
    "source_module" => "migrate_drupal",
    "deriver" => "\Drupal\migrate_drupal\Plugin\migrate\source\ContentEntityDeriver",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\ContentEntity",
    "provider" => [
      "migrate_drupal",
      "migrate",
      "core",
    ],
    "entity_type" => "paragraph",
  ],
  "variable_multirow" => [
    "requirements_met" => TRUE,
    "id" => "variable_multirow",
    "source_module" => "system",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\VariableMultiRow",
    "provider" => [
      0 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d8_config" => [
    "requirements_met" => TRUE,
    "id" => "d8_config",
    "source_module" => "system",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\d8\Config",
    "provider" => [
      0 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "variable_translation" => [
    "requirements_met" => TRUE,
    "id" => "variable_translation",
    "source_module" => "system",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\d6\VariableTranslation",
    "provider" => [
      0 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "i18n_variable" => [
    "requirements_met" => TRUE,
    "id" => "i18n_variable",
    "source_module" => "system",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\d6\i18nVariable",
    "provider" => [
      0 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "variable" => [
    "requirements_met" => TRUE,
    "id" => "variable",
    "source_module" => "system",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\Variable",
    "provider" => [
      0 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "md_empty" => [
    "requirements_met" => TRUE,
    "id" => "md_empty",
    "source_module" => "system",
    "class" => "Drupal\migrate_drupal\Plugin\migrate\source\EmptySource",
    "provider" => [
      0 => "migrate_drupal",
      1 => "migrate",
      3 => "core",
    ],
  ],
  "url" => [
    "requirements_met" => TRUE,
    "id" => "url",
    "class" => "Drupal\migrate_plus\Plugin\migrate\source\Url",
    "provider" => [
      0 => "migrate_plus",
      2 => "migrate",
      3 => "core",
    ],
  ],
  "d7_node_entity_translation" => [
    "requirements_met" => TRUE,
    "id" => "d7_node_entity_translation",
    "source_module" => "entity_translation",
    "class" => "Drupal\node\Plugin\migrate\source\d7\NodeEntityTranslation",
    "provider" => [
      0 => "node",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_node" => [
    "requirements_met" => TRUE,
    "id" => "d7_node",
    "source_module" => "node",
    "class" => "Drupal\node\Plugin\migrate\source\d7\Node",
    "provider" => [
      0 => "node",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_node_revision" => [
    "requirements_met" => TRUE,
    "id" => "d7_node_revision",
    "source_module" => "node",
    "class" => "Drupal\node\Plugin\migrate\source\d7\NodeRevision",
    "provider" => [
      0 => "node",
      2 => "migrate_drupal",
      4 => "migrate",
      6 => "core",
    ],
  ],
  "d7_node_type" => [
    "requirements_met" => TRUE,
    "id" => "d7_node_type",
    "source_module" => "node",
    "class" => "Drupal\node\Plugin\migrate\source\d7\NodeType",
    "provider" => [
      0 => "node",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_url_alias" => [
    "requirements_met" => TRUE,
    "id" => "d7_url_alias",
    "source_module" => "path",
    "class" => "Drupal\path\Plugin\migrate\source\d7\UrlAlias",
    "provider" => [
      0 => "path",
      2 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_rdf_mapping" => [
    "requirements_met" => TRUE,
    "id" => "d7_rdf_mapping",
    "source_module" => "rdf",
    "class" => "Drupal\rdf\Plugin\migrate\source\d7\RdfMapping",
    "provider" => [
      0 => "rdf",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_path_redirect" => [
    "requirements_met" => TRUE,
    "id" => "d7_path_redirect",
    "source_module" => "redirect",
    "class" => "Drupal\redirect\Plugin\migrate\source\d7\PathRedirect",
    "provider" => [
      0 => "redirect",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_shortcut_set_users" => [
    "requirements_met" => TRUE,
    "id" => "d7_shortcut_set_users",
    "source_module" => "shortcut",
    "class" => "Drupal\shortcut\Plugin\migrate\source\d7\ShortcutSetUsers",
    "provider" => [
      0 => "shortcut",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_shortcut_set" => [
    "requirements_met" => TRUE,
    "id" => "d7_shortcut_set",
    "source_module" => "shortcut",
    "class" => "Drupal\shortcut\Plugin\migrate\source\d7\ShortcutSet",
    "provider" => [
      0 => "shortcut",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_shortcut" => [
    "requirements_met" => TRUE,
    "id" => "d7_shortcut",
    "source_module" => "shortcut",
    "class" => "Drupal\shortcut\Plugin\migrate\source\d7\Shortcut",
    "provider" => [
      0 => "shortcut",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_theme_settings" => [
    "requirements_met" => TRUE,
    "id" => "d7_theme_settings",
    "source_module" => "system",
    "class" => "Drupal\system\Plugin\migrate\source\d7\ThemeSettings",
    "provider" => [
      0 => "system",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "menu" => [
    "requirements_met" => TRUE,
    "id" => "menu",
    "source_module" => "menu",
    "class" => "Drupal\system\Plugin\migrate\source\Menu",
    "provider" => [
      0 => "system",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "extension" => [
    "requirements_met" => TRUE,
    "id" => "extension",
    "source_module" => "system",
    "class" => "Drupal\system\Plugin\migrate\source\Extension",
    "provider" => [
      0 => "system",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "taxonomy_term" => [
    "requirements_met" => TRUE,
    "id" => "taxonomy_term",
    "source_module" => "taxonomy",
    "class" => "Drupal\taxonomy\Plugin\migrate\source\Term",
    "provider" => [
      0 => "taxonomy",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_taxonomy_term" => [
    "requirements_met" => TRUE,
    "id" => "d7_taxonomy_term",
    "source_module" => "taxonomy",
    "class" => "Drupal\taxonomy\Plugin\migrate\source\d7\Term",
    "provider" => [
      0 => "taxonomy",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_taxonomy_vocabulary" => [
    "requirements_met" => TRUE,
    "id" => "d7_taxonomy_vocabulary",
    "source_module" => "taxonomy",
    "class" => "Drupal\taxonomy\Plugin\migrate\source\d7\Vocabulary",
    "provider" => [
      0 => "taxonomy",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "profile_field" => [
    "requirements_met" => TRUE,
    "id" => "profile_field",
    "source_module" => "profile",
    "class" => "Drupal\user\Plugin\migrate\source\ProfileField",
    "provider" => [
      0 => "user",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_user" => [
    "requirements_met" => TRUE,
    "id" => "d7_user",
    "source_module" => "user",
    "class" => "Drupal\user\Plugin\migrate\source\d7\User",
    "provider" => [
      0 => "user",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_user_role" => [
    "requirements_met" => TRUE,
    "id" => "d7_user_role",
    "source_module" => "user",
    "class" => "Drupal\user\Plugin\migrate\source\d7\Role",
    "provider" => [
      0 => "user",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_user_entity_translation" => [
    "requirements_met" => TRUE,
    "id" => "d7_user_entity_translation",
    "source_module" => "entity_translation",
    "class" => "Drupal\user\Plugin\migrate\source\d7\UserEntityTranslation",
    "provider" => [
      0 => "user",
      1 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "user_picture_instance" => [
    "requirements_met" => TRUE,
    "id" => "user_picture_instance",
    "source_module" => "user",
    "class" => "Drupal\user\Plugin\migrate\source\UserPictureInstance",
    "provider" => [
      0 => "user",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_node_vote" => [
    "requirements_met" => TRUE,
    "id" => "d7_node_vote",
    "source_module" => "votingapi",
    "class" => "Drupal\votingapi\Plugin\migrate\source\d7\NodeVote",
    "provider" => [
      0 => "votingapi",
      2 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_vote" => [
    "requirements_met" => TRUE,
    "id" => "d7_vote",
    "source_module" => "votingapi",
    "class" => "Drupal\votingapi\Plugin\migrate\source\d7\Vote",
    "provider" => [
      0 => "votingapi",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "menu_link" => [
    "requirements_met" => TRUE,
    "id" => "menu_link",
    "source_module" => "menu",
    "class" => "Drupal\menu_link_content\Plugin\migrate\source\MenuLink",
    "provider" => [
      0 => "menu_link_content",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_entity_translation_settings" => [
    "requirements_met" => TRUE,
    "id" => "d7_entity_translation_settings",
    "source_module" => "entity_translation",
    "class" => "Drupal\content_translation\Plugin\migrate\source\d7\EntityTranslationSettings",
    "provider" => [
      0 => "content_translation",
      1 => "migrate_drupal",
      2 => "migrate",
      4 => "core",
    ],
  ],
  "d7_field_collection_item" => [
    "requirements_met" => TRUE,
    "id" => "d7_field_collection_item",
    "source_module" => "field_collection",
    "class" => "Drupal\paragraphs\Plugin\migrate\source\d7\FieldCollectionItem",
    "provider" => [
      0 => "paragraphs",
      2 => "migrate_drupal",
      4 => "migrate",
      6 => "core",
    ],
  ],
  "d7_field_collection_item_revision" => [
    "requirements_met" => TRUE,
    "id" => "d7_field_collection_item_revision",
    "source_module" => "field_collection",
    "class" => "Drupal\paragraphs\Plugin\migrate\source\d7\FieldCollectionItemRevision",
    "provider" => [
      0 => "paragraphs",
      3 => "migrate_drupal",
      5 => "migrate",
      7 => "core",
    ],
  ],
  "d7_paragraphs_item_revision" => [
    "requirements_met" => TRUE,
    "id" => "d7_paragraphs_item_revision",
    "source_module" => "paragraphs",
    "class" => "Drupal\paragraphs\Plugin\migrate\source\d7\ParagraphsItemRevision",
    "provider" => [
      0 => "paragraphs",
      3 => "migrate_drupal",
      5 => "migrate",
      7 => "core",
    ],
  ],
  "d7_field_collection_type" => [
    "requirements_met" => TRUE,
    "id" => "d7_field_collection_type",
    "source_module" => "field_collection",
    "class" => "Drupal\paragraphs\Plugin\migrate\source\d7\FieldCollectionType",
    "provider" => [
      0 => "paragraphs",
      2 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_paragraphs_type" => [
    "requirements_met" => TRUE,
    "id" => "d7_paragraphs_type",
    "source_module" => "paragraphs",
    "class" => "Drupal\paragraphs\Plugin\migrate\source\d7\ParagraphsType",
    "provider" => [
      0 => "paragraphs",
      2 => "migrate_drupal",
      3 => "migrate",
      5 => "core",
    ],
  ],
  "d7_paragraphs_item" => [
    "requirements_met" => TRUE,
    "id" => "d7_paragraphs_item",
    "source_module" => "paragraphs",
    "class" => "Drupal\paragraphs\Plugin\migrate\source\d7\ParagraphsItem",
    "provider" => [
      0 => "paragraphs",
      2 => "migrate_drupal",
      4 => "migrate",
      6 => "core",
    ],
  ],
];