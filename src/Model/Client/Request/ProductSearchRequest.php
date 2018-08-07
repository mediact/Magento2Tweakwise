<?php
/**
 * Tweakwise & Emico (https://www.tweakwise.com/ & https://www.emico.nl/) - All Rights Reserved
 *
 * @copyright Copyright (c) 2017-2017 Tweakwise.com B.V. (https://www.tweakwise.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Emico\Tweakwise\Model\Client\Request;

use Emico\TweakwiseExport\Model\Helper;
use Magento\Store\Model\StoreManager;

class ProductSearchRequest extends ProductNavigationRequest
{
    /**
     * {@inheritDoc}
     */
    protected $path = 'navigation-search';

    /**
     * Add visibility filters
     */
    protected function addVisibilityFilter()
    {
        $this->addAttributeFilter('visibility', 'Catalog, Search');
        $this->addAttributeFilter('visibility', 'Search');
    }

    /**
     * @param string $query
     * @return $this
     */
    public function setSearch($query)
    {
        $this->setParameter('tn_q', $query);
        return $this;
    }
}