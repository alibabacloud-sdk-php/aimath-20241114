<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenAnalysisRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenAnalysisResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenStepRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenStepResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GlobalConfirmRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GlobalConfirmResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateAnalysisRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateAnalysisResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateStepRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateStepResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AIMath extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aimath', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 生成解题分析
     *  *
     * @param GenAnalysisRequest $request GenAnalysisRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GenAnalysisResponse GenAnalysisResponse
     */
    public function genAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->exerciseContent)) {
            $body['ExerciseContent'] = $request->exerciseContent;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenAnalysis',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成解题分析
     *  *
     * @param GenAnalysisRequest $request GenAnalysisRequest
     *
     * @return GenAnalysisResponse GenAnalysisResponse
     */
    public function genAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->genAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary 生成数学解题步骤
     *  *
     * @param GenStepRequest $request GenStepRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GenStepResponse GenStepResponse
     */
    public function genStepWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->exerciseCode)) {
            $body['ExerciseCode'] = $request->exerciseCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenStep',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenStepResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成数学解题步骤
     *  *
     * @param GenStepRequest $request GenStepRequest
     *
     * @return GenStepResponse GenStepResponse
     */
    public function genStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->genStepWithOptions($request, $runtime);
    }

    /**
     * @summary 全局确认修订完成
     *  *
     * @param GlobalConfirmRequest $request GlobalConfirmRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GlobalConfirmResponse GlobalConfirmResponse
     */
    public function globalConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->exerciseCode)) {
            $body['ExerciseCode'] = $request->exerciseCode;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GlobalConfirm',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GlobalConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 全局确认修订完成
     *  *
     * @param GlobalConfirmRequest $request GlobalConfirmRequest
     *
     * @return GlobalConfirmResponse GlobalConfirmResponse
     */
    public function globalConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->globalConfirmWithOptions($request, $runtime);
    }

    /**
     * @summary 修订解题分析
     *  *
     * @param UpdateAnalysisRequest $request UpdateAnalysisRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAnalysisResponse UpdateAnalysisResponse
     */
    public function updateAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentCode)) {
            $body['ContentCode'] = $request->contentCode;
        }
        if (!Utils::isUnset($request->exerciseCode)) {
            $body['ExerciseCode'] = $request->exerciseCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAnalysis',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修订解题分析
     *  *
     * @param UpdateAnalysisRequest $request UpdateAnalysisRequest
     *
     * @return UpdateAnalysisResponse UpdateAnalysisResponse
     */
    public function updateAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary 修订解题步骤
     *  *
     * @param UpdateStepRequest $request UpdateStepRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStepResponse UpdateStepResponse
     */
    public function updateStepWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentCode)) {
            $body['ContentCode'] = $request->contentCode;
        }
        if (!Utils::isUnset($request->exerciseCode)) {
            $body['ExerciseCode'] = $request->exerciseCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStep',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStepResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修订解题步骤
     *  *
     * @param UpdateStepRequest $request UpdateStepRequest
     *
     * @return UpdateStepResponse UpdateStepResponse
     */
    public function updateStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStepWithOptions($request, $runtime);
    }
}
