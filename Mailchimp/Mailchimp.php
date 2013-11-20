<?php
/**
 * Authored by  AlmogBaku
 *              almog.baku@gmail.com
 *              http://www.almogbaku.com/
 *
 * 11/9/13 8:25 PM
 */

namespace GoDisco\MailchimpBundle\Mailchimp;

use \Mailchimp as BaseMailchimp;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Mailchimp extends BaseMailchimp
{
    /**
     * @var ContainerInterface
     *
     * @api
     */
    protected $container;

    public function __construct(ContainerInterface $container, $options = array())
    {
        $this->container    = $container;

        $options['debug'] = $container->getParameter("kernel.debug");
        parent::__construct($container->getParameter("mailchimp.api_key"), $options);
    }

    /**
     * Get default list as defined in the config
     * @return string $default_list
     */
    public function getDefaultList()
    {
        return $this->container->getParameter("mailchimp.default_list");
    }
}