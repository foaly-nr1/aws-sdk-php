<?php
/**
 * Copyright 2010-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\DynamoDb\Enum;

use Aws\Common\Enum;

/**
 * Contains enumerable DynamoDB attribute type values
 */
class Type extends Enum
{
    const N          = 'N';
    const S          = 'S';
    const NS         = 'NS';
    const SS         = 'SS';

    const NUMBER     = self::N;
    const STRING     = self::S;
    const NUMBER_SET = self::NS;
    const STRING_SET = self::SS;
}