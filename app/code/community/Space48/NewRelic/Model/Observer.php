<?php

class Space48_NewRelic_Model_Observer
{

    /**
     * Stops New Relic from adding javascript for page load timing
     * - This was breaking the ajax controller for transactional email creation
     *
     * @param Varien_Event_Observer $observer
     */
    public function disableNewRelic(Varien_Event_Observer $observer)
    {
        if (extension_loaded ('newrelic')) {
            newrelic_disable_autorum ();
        }
    }
}
