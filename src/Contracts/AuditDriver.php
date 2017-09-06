<?php
/**
 * This file is part of the Laravel Auditing package.
 *
 * @author     Antério Vieira <anteriovieira@gmail.com>
 * @author     Quetzy Garcia  <quetzyg@altek.org>
 * @author     Raphael França <raphaelfrancabsb@gmail.com>
 * @copyright  2015-2017
 *
 * For the full copyright and license information,
 * please view the LICENSE.md file that was distributed
 * with this source code.
 */

namespace Sormagec\Auditing\Contracts;

interface AuditDriver
{
    /**
     * Perform an audit.
     *
     * @param \Sormagec\Auditing\Contracts\Auditable $model
     *
     * @return \Sormagec\Auditing\Contracts\Audit
     */
    public function audit(Auditable $model);

    /**
     * Remove older audits that go over the threshold.
     *
     * @param \Sormagec\Auditing\Contracts\Auditable $model
     *
     * @return bool
     */
    public function prune(Auditable $model);
}