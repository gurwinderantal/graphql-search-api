<?php

namespace Drupal\graphql_search_api\Plugin\GraphQL\Fields;

use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * Returns the excerpt for a result from Search API.
 *
 * @GraphQLField(
 *   secure = true,
 *   parents = {"SearchAPIDocument"},
 *   id = "search_api_excerpt",
 *   name = "excerpt",
 *   type = "String"
 * )
 */
class SearchAPIExcerpt extends FieldPluginBase {

  /**
   * {@inheritDoc}
   */
  public function resolveValues($value, array $args, ResolveContext $context, ResolveInfo $info) {
    yield $value['excerpt'];
  }

}
