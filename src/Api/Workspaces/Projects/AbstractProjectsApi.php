<?php

declare(strict_types=1);

/*
 * This file is part of the Bitbucket API Client.
 *
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bitbucket\Api\Workspaces\Projects;

use Bitbucket\Api\Workspaces\AbstractWorkspacesApi;
use Bitbucket\Client;

/**
 * The abstract projects API class.
 *
 * @author Patrick Barsallo <p.d.barsallo@gmail.com>
 */
abstract class AbstractProjectsApi extends AbstractWorkspacesApi
{

    /**
     * The project.
     *
     * @var string
     */
    protected $project;

    /**
     * Create a new API instance.
     *
     * @param Client $client
     * @param string $project
     *
     * @return void
     */
    public function __construct(Client $client, string $workspace, string $project)
    {
        parent::__construct($client, $workspace);
        $this->project = $project;
    }
}
