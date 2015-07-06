<?php

/*
 * This file is part of StyleCI.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace StyleCI\StyleCI\Commands\Analysis;

use StyleCI\StyleCI\Models\Repo;

/**
 * This is the analyse pull request command.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class AnalysePullRequestCommand
{
    /**
     * The repo to analyse.
     *
     * @var \StyleCI\StyleCI\Models\Repo
     */
    public $repo;

    /**
     * The pr to analyse.
     *
     * @var int
     */
    public $pr;

    /**
     * The commit to analyse.
     *
     * @var string
     */
    public $commit;

    /**
     * The commit message.
     *
     * @var string
     */
    public $message;

    /**
     * The validation rules.
     *
     * @var array
     */
    public $rules = [
        'pr'      => 'required|integer|min:1',
        'commit'  => 'required|string|size:40',
        'message' => 'required|string|between:1,255',
    ];

    /**
     * Create a new analyse commit command instance.
     *
     * @param \StyleCI\StyleCI\Models\Repo $repo
     * @param int                          $pr
     * @param string                       $commit
     * @param string                       $message
     *
     * @return void
     */
    public function __construct(Repo $repo, $pr, $commit, $message)
    {
        $this->repo = $repo;
        $this->pr = $pr;
        $this->commit = $commit;
        $this->message = $message;
    }
}
