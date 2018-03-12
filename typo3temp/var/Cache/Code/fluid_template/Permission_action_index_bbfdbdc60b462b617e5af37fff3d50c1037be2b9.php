<?php

class Permission_action_index_bbfdbdc60b462b617e5af37fff3d50c1037be2b9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Permission';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'bu' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '

	<div class="form-group">
		<label for="depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= ':</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['size'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['options'] = NULL;
$arguments6['optionsAfterContent'] = false;
$arguments6['optionValueField'] = NULL;
$arguments6['optionLabelField'] = NULL;
$arguments6['sortByOptionLabel'] = false;
$arguments6['selectAllByDefault'] = false;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['prependOptionLabel'] = NULL;
$arguments6['prependOptionValue'] = NULL;
$arguments6['multiple'] = false;
$arguments6['class'] = 'form-control';
$arguments6['id'] = 'depth';
$array8 = array (
);$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array8);
$array9 = array (
);$arguments6['options'] = $renderingContext->getVariableProvider()->getByPath('depthOptions', $array9);
// Rendering Array
$array10 = array();
$output11 = '';

$output11 .= 'jumpToUrl(\'';
$array12 = array (
);
$output11 .= $renderingContext->getVariableProvider()->getByPath('depthBaseUrl', $array12);

$output11 .= '\'.replace(\'__DEPTH__\', this.options[this.selectedIndex].value), this);';
$array10['onchange'] = $output11;
$arguments6['additionalAttributes'] = $array10;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
	</div>

	<div class="panel panel-default panel-space">
		<div class="table-fit">
			<table class="table table-striped table-hover" id="typo3-permissionList">
				<thead>
				<tr>
					<th colspan="2">&nbsp;</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output3 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output3 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output3 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output3 .= '</th>
				</tr>
				</thead>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
					<tr>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return '
									A "normal" page row is rendered, not the root page
								';
};
$arguments161 = array();

$output160 .= NULL;

$output160 .= '

								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';
$array185 = array (
);
$output184 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array185);
$array186 = array (
);
$output184 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array186);
return $output184;
};
$arguments182 = array();
$arguments182['value'] = NULL;

$output181 .= isset($arguments182['value']) ? $arguments182['value'] : $renderChildrenClosure183();

$output181 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$array189 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array189)]);
};
$arguments187 = array();
$arguments187['maxCharacters'] = NULL;
$arguments187['append'] = '...';
$arguments187['respectWordBoundaries'] = true;
$arguments187['respectHtml'] = true;
$arguments187['maxCharacters'] = 20;

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output181 .= '
									';
return $output181;
};
$arguments163 = array();
$arguments163['action'] = NULL;
$arguments163['arguments'] = array (
);
$arguments163['controller'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['pluginName'] = NULL;
$arguments163['pageUid'] = NULL;
$arguments163['pageType'] = 0;
$arguments163['noCache'] = false;
$arguments163['noCacheHash'] = false;
$arguments163['section'] = '';
$arguments163['format'] = '';
$arguments163['linkAccessRestrictedPages'] = false;
$arguments163['additionalParams'] = array (
);
$arguments163['absolute'] = false;
$arguments163['addQueryString'] = false;
$arguments163['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments163['addQueryStringMethod'] = NULL;
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['class'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['name'] = NULL;
$arguments163['rel'] = NULL;
$arguments163['rev'] = NULL;
$arguments163['target'] = NULL;
$arguments163['action'] = 'edit';
// Rendering Array
$array165 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['then'] = NULL;
$arguments166['else'] = NULL;
$arguments166['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array169);

$expression170 = function($context) {return ($context["node0"]);};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$array171 = array (
);$arguments166['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array171);
$array172 = array (
);$arguments166['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array172);
$array165['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);
$array173 = array (
);$array165['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array173);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['action'] = NULL;
$arguments174['arguments'] = array (
);
$arguments174['controller'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['pluginName'] = NULL;
$arguments174['pageUid'] = NULL;
$arguments174['pageType'] = 0;
$arguments174['noCache'] = false;
$arguments174['noCacheHash'] = false;
$arguments174['section'] = '';
$arguments174['format'] = '';
$arguments174['linkAccessRestrictedPages'] = false;
$arguments174['additionalParams'] = array (
);
$arguments174['absolute'] = false;
$arguments174['addQueryString'] = false;
$arguments174['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments174['addQueryStringMethod'] = NULL;
$arguments174['action'] = 'index';
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array177);
$array178 = array (
);$array176['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array178);
$arguments174['arguments'] = $array176;
$array165['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
$arguments163['arguments'] = $array165;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['key'] = NULL;
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['htmlEscape'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments163['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output160 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};
$arguments190 = array();

$output160 .= NULL;

$output160 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['identifier'] = NULL;
$arguments211['size'] = 'small';
$arguments211['overlay'] = NULL;
$arguments211['state'] = 'default';
$arguments211['alternativeMarkupIdentifier'] = NULL;
$arguments211['identifier'] = 'actions-open';

$output210 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
									';
return $output210;
};
$arguments192 = array();
$arguments192['action'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['controller'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['pluginName'] = NULL;
$arguments192['pageUid'] = NULL;
$arguments192['pageType'] = 0;
$arguments192['noCache'] = false;
$arguments192['noCacheHash'] = false;
$arguments192['section'] = '';
$arguments192['format'] = '';
$arguments192['linkAccessRestrictedPages'] = false;
$arguments192['additionalParams'] = array (
);
$arguments192['absolute'] = false;
$arguments192['addQueryString'] = false;
$arguments192['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments192['addQueryStringMethod'] = NULL;
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['name'] = NULL;
$arguments192['rel'] = NULL;
$arguments192['rev'] = NULL;
$arguments192['target'] = NULL;
$arguments192['action'] = 'edit';
// Rendering Array
$array194 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array198 = array (
);$array197['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array198);

$expression199 = function($context) {return ($context["node0"]);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$array200 = array (
);$arguments195['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array200);
$array201 = array (
);$arguments195['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array201);
$array194['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);
$array202 = array (
);$array194['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array202);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['action'] = NULL;
$arguments203['arguments'] = array (
);
$arguments203['controller'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['pluginName'] = NULL;
$arguments203['pageUid'] = NULL;
$arguments203['pageType'] = 0;
$arguments203['noCache'] = false;
$arguments203['noCacheHash'] = false;
$arguments203['section'] = '';
$arguments203['format'] = '';
$arguments203['linkAccessRestrictedPages'] = false;
$arguments203['additionalParams'] = array (
);
$arguments203['absolute'] = false;
$arguments203['addQueryString'] = false;
$arguments203['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments203['addQueryStringMethod'] = NULL;
$arguments203['action'] = 'index';
// Rendering Array
$array205 = array();
$array206 = array (
);$array205['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array206);
$array207 = array (
);$array205['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array207);
$arguments203['arguments'] = $array205;
$array194['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);
$arguments192['arguments'] = $array194;
$arguments192['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['key'] = NULL;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['htmlEscape'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments192['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output160 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['permission'] = NULL;
$arguments213['scope'] = NULL;
$arguments213['pageId'] = NULL;
$array215 = array (
);$arguments213['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array215);
$arguments213['scope'] = 'user';
$array216 = array (
);$arguments213['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array216);

$output160 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output160 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['section'] = NULL;
$arguments217['partial'] = NULL;
$arguments217['delegate'] = NULL;
$arguments217['renderable'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['optional'] = false;
$arguments217['default'] = NULL;
$arguments217['contentAs'] = NULL;
$arguments217['partial'] = 'Permission/Ownername';
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array220);
$array221 = array (
);$array219['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array221);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['array'] = NULL;
$arguments222['key'] = NULL;
$arguments222['subKey'] = '';
$array224 = array (
);$arguments222['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array224);
$array225 = array (
);$arguments222['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array225);
$arguments222['subKey'] = 'username';
$array219['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);
$arguments217['arguments'] = $array219;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output160 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['permission'] = NULL;
$arguments226['scope'] = NULL;
$arguments226['pageId'] = NULL;
$array228 = array (
);$arguments226['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array228);
$arguments226['scope'] = 'group';
$array229 = array (
);$arguments226['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array229);

$output160 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output160 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['section'] = NULL;
$arguments230['partial'] = NULL;
$arguments230['delegate'] = NULL;
$arguments230['renderable'] = NULL;
$arguments230['arguments'] = array (
);
$arguments230['optional'] = false;
$arguments230['default'] = NULL;
$arguments230['contentAs'] = NULL;
$arguments230['partial'] = 'Permission/Groupname';
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array233);
$array234 = array (
);$array232['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array234);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['array'] = NULL;
$arguments235['key'] = NULL;
$arguments235['subKey'] = '';
$array237 = array (
);$arguments235['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array237);
$array238 = array (
);$arguments235['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array238);
$arguments235['subKey'] = 'title';
$array232['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);
$arguments230['arguments'] = $array232;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output160 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['permission'] = NULL;
$arguments239['scope'] = NULL;
$arguments239['pageId'] = NULL;
$array241 = array (
);$arguments239['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array241);
$arguments239['scope'] = 'everybody';
$array242 = array (
);$arguments239['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array242);

$output160 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output160 .= '
								</td>

								<td class="nowrap">
									<span id="el_';
$array243 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array243)]);

$output160 .= '">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array265 = array (
);
$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array265)]);

$output264 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['key'] = NULL;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['htmlEscape'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$arguments266['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext)]);

$output264 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['identifier'] = NULL;
$arguments268['size'] = 'small';
$arguments268['overlay'] = NULL;
$arguments268['state'] = 'default';
$arguments268['alternativeMarkupIdentifier'] = NULL;
$arguments268['identifier'] = 'actions-lock';

$output264 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output264 .= '
												</a>
											';
return $output264;
};
$arguments262 = array();

$output261 .= '';

$output261 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array273 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array273)]);

$output272 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['key'] = NULL;
$arguments274['id'] = NULL;
$arguments274['default'] = NULL;
$arguments274['htmlEscape'] = NULL;
$arguments274['arguments'] = NULL;
$arguments274['extensionName'] = NULL;
$arguments274['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext)]);

$output272 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['identifier'] = NULL;
$arguments276['size'] = 'small';
$arguments276['overlay'] = NULL;
$arguments276['state'] = 'default';
$arguments276['alternativeMarkupIdentifier'] = NULL;
$arguments276['identifier'] = 'actions-unlock';

$output272 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output272 .= '
												</a>
											';
return $output272;
};
$arguments270 = array();
$arguments270['if'] = NULL;

$output261 .= '';

$output261 .= '
										';
return $output261;
};
$arguments244 = array();
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$arguments244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array259);

$expression260 = function($context) {return ($context["node0"]);};
$arguments244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression260(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);
$arguments244['__thenClosure'] = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array247 = array (
);
$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array247)]);

$output246 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['htmlEscape'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext)]);

$output246 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['identifier'] = NULL;
$arguments250['size'] = 'small';
$arguments250['overlay'] = NULL;
$arguments250['state'] = 'default';
$arguments250['alternativeMarkupIdentifier'] = NULL;
$arguments250['identifier'] = 'actions-lock';

$output246 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output246 .= '
												</a>
											';
return $output246;
};
$arguments244['__elseClosures'][] = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array253 = array (
);
$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array253)]);

$output252 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['key'] = NULL;
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['htmlEscape'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext)]);

$output252 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['identifier'] = NULL;
$arguments256['size'] = 'small';
$arguments256['overlay'] = NULL;
$arguments256['state'] = 'default';
$arguments256['alternativeMarkupIdentifier'] = NULL;
$arguments256['identifier'] = 'actions-unlock';

$output252 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output252 .= '
												</a>
											';
return $output252;
};

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output160 .= '
									</span>
								</td>
							';
return $output160;
};
$arguments158 = array();

$output157 .= '';

$output157 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return '
									Root page row is rendered
								';
};
$arguments281 = array();

$output280 .= NULL;

$output280 .= '
								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$array285 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array285);
};
$arguments283 = array();
$arguments283['value'] = NULL;

$output280 .= isset($arguments283['value']) ? $arguments283['value'] : $renderChildrenClosure284();

$output280 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$array288 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array288)]);
};
$arguments286 = array();
$arguments286['maxCharacters'] = NULL;
$arguments286['append'] = '...';
$arguments286['respectWordBoundaries'] = true;
$arguments286['respectHtml'] = true;
$arguments286['maxCharacters'] = 20;

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output280 .= '
								</td>
								<td></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
							';
return $output280;
};
$arguments278 = array();
$arguments278['if'] = NULL;

$output157 .= '';

$output157 .= '
						';
return $output157;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array155);

$expression156 = function($context) {return ($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return '
									A "normal" page row is rendered, not the root page
								';
};
$arguments28 = array();

$output27 .= NULL;

$output27 .= '

								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';
$array52 = array (
);
$output51 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array52);
$array53 = array (
);
$output51 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array53);
return $output51;
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output48 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output48 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array56 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array56)]);
};
$arguments54 = array();
$arguments54['maxCharacters'] = NULL;
$arguments54['append'] = '...';
$arguments54['respectWordBoundaries'] = true;
$arguments54['respectHtml'] = true;
$arguments54['maxCharacters'] = 20;

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output48 .= '
									';
return $output48;
};
$arguments30 = array();
$arguments30['action'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['controller'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['pluginName'] = NULL;
$arguments30['pageUid'] = NULL;
$arguments30['pageType'] = 0;
$arguments30['noCache'] = false;
$arguments30['noCacheHash'] = false;
$arguments30['section'] = '';
$arguments30['format'] = '';
$arguments30['linkAccessRestrictedPages'] = false;
$arguments30['additionalParams'] = array (
);
$arguments30['absolute'] = false;
$arguments30['addQueryString'] = false;
$arguments30['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments30['addQueryStringMethod'] = NULL;
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['name'] = NULL;
$arguments30['rel'] = NULL;
$arguments30['rev'] = NULL;
$arguments30['target'] = NULL;
$arguments30['action'] = 'edit';
// Rendering Array
$array32 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array36);

$expression37 = function($context) {return ($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$array38 = array (
);$arguments33['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array38);
$array39 = array (
);$arguments33['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array39);
$array32['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);
$array40 = array (
);$array32['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array40);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['action'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['controller'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['pluginName'] = NULL;
$arguments41['pageUid'] = NULL;
$arguments41['pageType'] = 0;
$arguments41['noCache'] = false;
$arguments41['noCacheHash'] = false;
$arguments41['section'] = '';
$arguments41['format'] = '';
$arguments41['linkAccessRestrictedPages'] = false;
$arguments41['additionalParams'] = array (
);
$arguments41['absolute'] = false;
$arguments41['addQueryString'] = false;
$arguments41['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments41['addQueryStringMethod'] = NULL;
$arguments41['action'] = 'index';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array44);
$array45 = array (
);$array43['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array45);
$arguments41['arguments'] = $array43;
$array32['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
$arguments30['arguments'] = $array32;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments30['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};
$arguments57 = array();

$output27 .= NULL;

$output27 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['identifier'] = NULL;
$arguments78['size'] = 'small';
$arguments78['overlay'] = NULL;
$arguments78['state'] = 'default';
$arguments78['alternativeMarkupIdentifier'] = NULL;
$arguments78['identifier'] = 'actions-open';

$output77 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
									';
return $output77;
};
$arguments59 = array();
$arguments59['action'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = 0;
$arguments59['noCache'] = false;
$arguments59['noCacheHash'] = false;
$arguments59['section'] = '';
$arguments59['format'] = '';
$arguments59['linkAccessRestrictedPages'] = false;
$arguments59['additionalParams'] = array (
);
$arguments59['absolute'] = false;
$arguments59['addQueryString'] = false;
$arguments59['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['name'] = NULL;
$arguments59['rel'] = NULL;
$arguments59['rev'] = NULL;
$arguments59['target'] = NULL;
$arguments59['action'] = 'edit';
// Rendering Array
$array61 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array65);

$expression66 = function($context) {return ($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$array67 = array (
);$arguments62['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array67);
$array68 = array (
);$arguments62['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array68);
$array61['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
$array69 = array (
);$array61['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array69);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['action'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['controller'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['pluginName'] = NULL;
$arguments70['pageUid'] = NULL;
$arguments70['pageType'] = 0;
$arguments70['noCache'] = false;
$arguments70['noCacheHash'] = false;
$arguments70['section'] = '';
$arguments70['format'] = '';
$arguments70['linkAccessRestrictedPages'] = false;
$arguments70['additionalParams'] = array (
);
$arguments70['absolute'] = false;
$arguments70['addQueryString'] = false;
$arguments70['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments70['addQueryStringMethod'] = NULL;
$arguments70['action'] = 'index';
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array73);
$array74 = array (
);$array72['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array74);
$arguments70['arguments'] = $array72;
$array61['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);
$arguments59['arguments'] = $array61;
$arguments59['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['htmlEscape'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments59['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output27 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['permission'] = NULL;
$arguments80['scope'] = NULL;
$arguments80['pageId'] = NULL;
$array82 = array (
);$arguments80['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array82);
$arguments80['scope'] = 'user';
$array83 = array (
);$arguments80['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array83);

$output27 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output27 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['renderable'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['partial'] = 'Permission/Ownername';
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array87);
$array88 = array (
);$array86['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array88);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['array'] = NULL;
$arguments89['key'] = NULL;
$arguments89['subKey'] = '';
$array91 = array (
);$arguments89['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array91);
$array92 = array (
);$arguments89['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array92);
$arguments89['subKey'] = 'username';
$array86['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
$arguments84['arguments'] = $array86;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output27 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['permission'] = NULL;
$arguments93['scope'] = NULL;
$arguments93['pageId'] = NULL;
$array95 = array (
);$arguments93['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array95);
$arguments93['scope'] = 'group';
$array96 = array (
);$arguments93['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array96);

$output27 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output27 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['partial'] = 'Permission/Groupname';
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array100);
$array101 = array (
);$array99['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array101);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['array'] = NULL;
$arguments102['key'] = NULL;
$arguments102['subKey'] = '';
$array104 = array (
);$arguments102['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array104);
$array105 = array (
);$arguments102['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array105);
$arguments102['subKey'] = 'title';
$array99['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);
$arguments97['arguments'] = $array99;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output27 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['permission'] = NULL;
$arguments106['scope'] = NULL;
$arguments106['pageId'] = NULL;
$array108 = array (
);$arguments106['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array108);
$arguments106['scope'] = 'everybody';
$array109 = array (
);$arguments106['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array109);

$output27 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output27 .= '
								</td>

								<td class="nowrap">
									<span id="el_';
$array110 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array110)]);

$output27 .= '">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array132 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array132)]);

$output131 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['htmlEscape'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output131 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['identifier'] = NULL;
$arguments135['size'] = 'small';
$arguments135['overlay'] = NULL;
$arguments135['state'] = 'default';
$arguments135['alternativeMarkupIdentifier'] = NULL;
$arguments135['identifier'] = 'actions-lock';

$output131 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output131 .= '
												</a>
											';
return $output131;
};
$arguments129 = array();

$output128 .= '';

$output128 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array140 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array140)]);

$output139 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['key'] = NULL;
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['htmlEscape'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output139 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['identifier'] = NULL;
$arguments143['size'] = 'small';
$arguments143['overlay'] = NULL;
$arguments143['state'] = 'default';
$arguments143['alternativeMarkupIdentifier'] = NULL;
$arguments143['identifier'] = 'actions-unlock';

$output139 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output139 .= '
												</a>
											';
return $output139;
};
$arguments137 = array();
$arguments137['if'] = NULL;

$output128 .= '';

$output128 .= '
										';
return $output128;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array126);

$expression127 = function($context) {return ($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array114 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array114)]);

$output113 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output113 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['identifier'] = NULL;
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$arguments117['alternativeMarkupIdentifier'] = NULL;
$arguments117['identifier'] = 'actions-lock';

$output113 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output113 .= '
												</a>
											';
return $output113;
};
$arguments111['__elseClosures'][] = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array120)]);

$output119 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['key'] = NULL;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output119 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['identifier'] = NULL;
$arguments123['size'] = 'small';
$arguments123['overlay'] = NULL;
$arguments123['state'] = 'default';
$arguments123['alternativeMarkupIdentifier'] = NULL;
$arguments123['identifier'] = 'actions-unlock';

$output119 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output119 .= '
												</a>
											';
return $output119;
};

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output27 .= '
									</span>
								</td>
							';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return '
									Root page row is rendered
								';
};
$arguments146 = array();

$output145 .= NULL;

$output145 .= '
								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$array150 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array150);
};
$arguments148 = array();
$arguments148['value'] = NULL;

$output145 .= isset($arguments148['value']) ? $arguments148['value'] : $renderChildrenClosure149();

$output145 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array153 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array153)]);
};
$arguments151 = array();
$arguments151['maxCharacters'] = NULL;
$arguments151['append'] = '...';
$arguments151['respectWordBoundaries'] = true;
$arguments151['respectHtml'] = true;
$arguments151['maxCharacters'] = 20;

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output145 .= '
								</td>
								<td></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
							';
return $output145;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
					</tr>
				';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('viewTree', $array23);
$arguments21['as'] = 'data';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '
			</table>
		</div>
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$array291 = array (
);return $renderingContext->getVariableProvider()->getByPath('cshItem', $array291);
};
$arguments289 = array();
$arguments289['value'] = NULL;

$output3 .= isset($arguments289['value']) ? $arguments289['value'] : $renderChildrenClosure290();

$output3 .= '

	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['key'] = NULL;
$arguments292['id'] = NULL;
$arguments292['default'] = NULL;
$arguments292['htmlEscape'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext)]);

$output3 .= ':</h3>
	<div class="beuser-legend">
		<table>
			<tr>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">1</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['key'] = NULL;
$arguments294['id'] = NULL;
$arguments294['default'] = NULL;
$arguments294['htmlEscape'] = NULL;
$arguments294['arguments'] = NULL;
$arguments294['extensionName'] = NULL;
$arguments294['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['key'] = NULL;
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['htmlEscape'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$arguments296['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext)]);

$output3 .= '</td>
			</tr>
			<tr>
				<td class="vr nowrap"><span></span></td>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">2</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['key'] = NULL;
$arguments298['id'] = NULL;
$arguments298['default'] = NULL;
$arguments298['htmlEscape'] = NULL;
$arguments298['arguments'] = NULL;
$arguments298['extensionName'] = NULL;
$arguments298['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['key'] = NULL;
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['htmlEscape'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext)]);

$output3 .= '</td>
			</tr>
			<tr>
				<td class="vr nowrap"><span></span></td>
				<td class="vr nowrap"><span></span></td>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">3</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['key'] = NULL;
$arguments302['id'] = NULL;
$arguments302['default'] = NULL;
$arguments302['htmlEscape'] = NULL;
$arguments302['arguments'] = NULL;
$arguments302['extensionName'] = NULL;
$arguments302['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['htmlEscape'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output3 .= '</td>
			</tr>
			<tr>
				<td class="vr nowrap"><span></span></td>
				<td class="vr nowrap"><span></span></td>
				<td class="vr nowrap"><span></span></td>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">4</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['key'] = NULL;
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['htmlEscape'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['key'] = NULL;
$arguments308['id'] = NULL;
$arguments308['default'] = NULL;
$arguments308['htmlEscape'] = NULL;
$arguments308['arguments'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);

$output3 .= '</td>
			</tr>
			<tr>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['identifier'] = NULL;
$arguments310['size'] = 'small';
$arguments310['overlay'] = NULL;
$arguments310['state'] = 'default';
$arguments310['alternativeMarkupIdentifier'] = NULL;
$arguments310['identifier'] = 'status-status-permission-granted';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output3 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['identifier'] = NULL;
$arguments312['size'] = 'small';
$arguments312['overlay'] = NULL;
$arguments312['state'] = 'default';
$arguments312['alternativeMarkupIdentifier'] = NULL;
$arguments312['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output3 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['identifier'] = NULL;
$arguments314['size'] = 'small';
$arguments314['overlay'] = NULL;
$arguments314['state'] = 'default';
$arguments314['alternativeMarkupIdentifier'] = NULL;
$arguments314['identifier'] = 'status-status-permission-granted';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output3 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['identifier'] = NULL;
$arguments316['size'] = 'small';
$arguments316['overlay'] = NULL;
$arguments316['state'] = 'default';
$arguments316['alternativeMarkupIdentifier'] = NULL;
$arguments316['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output3 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['identifier'] = NULL;
$arguments318['size'] = 'small';
$arguments318['overlay'] = NULL;
$arguments318['state'] = 'default';
$arguments318['alternativeMarkupIdentifier'] = NULL;
$arguments318['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output3 .= '</td>
				<td class="nowrap"><span class="number">5</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['htmlEscape'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['key'] = NULL;
$arguments322['id'] = NULL;
$arguments322['default'] = NULL;
$arguments322['htmlEscape'] = NULL;
$arguments322['arguments'] = NULL;
$arguments322['extensionName'] = NULL;
$arguments322['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext)]);

$output3 .= '</td>
			</tr>
		</table>
	</div>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['key'] = NULL;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['htmlEscape'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output3 .= '</p>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['identifier'] = NULL;
$arguments326['size'] = 'small';
$arguments326['overlay'] = NULL;
$arguments326['state'] = 'default';
$arguments326['alternativeMarkupIdentifier'] = NULL;
$arguments326['identifier'] = 'status-status-permission-granted';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output3 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['key'] = NULL;
$arguments328['id'] = NULL;
$arguments328['default'] = NULL;
$arguments328['htmlEscape'] = NULL;
$arguments328['arguments'] = NULL;
$arguments328['extensionName'] = NULL;
$arguments328['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Granted';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext)]);

$output3 .= '<br/>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['identifier'] = NULL;
$arguments330['size'] = 'small';
$arguments330['overlay'] = NULL;
$arguments330['state'] = 'default';
$arguments330['alternativeMarkupIdentifier'] = NULL;
$arguments330['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output3 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['key'] = NULL;
$arguments332['id'] = NULL;
$arguments332['default'] = NULL;
$arguments332['htmlEscape'] = NULL;
$arguments332['arguments'] = NULL;
$arguments332['extensionName'] = NULL;
$arguments332['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Denied';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);

$output3 .= '
	</p>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output334 = '';

$output334 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['name'] = NULL;
$arguments335['name'] = 'Permission';

$output334 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output334 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments340 = array();
$arguments340['key'] = NULL;
$arguments340['id'] = NULL;
$arguments340['default'] = NULL;
$arguments340['htmlEscape'] = NULL;
$arguments340['arguments'] = NULL;
$arguments340['extensionName'] = NULL;
$arguments340['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';

$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext)]);

$output339 .= '</h1>
';
return $output339;
};
$arguments337 = array();
$arguments337['name'] = NULL;
$arguments337['name'] = 'headline';

$output334 .= NULL;

$output334 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '

	<div class="form-group">
		<label for="depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['key'] = NULL;
$arguments345['id'] = NULL;
$arguments345['default'] = NULL;
$arguments345['htmlEscape'] = NULL;
$arguments345['arguments'] = NULL;
$arguments345['extensionName'] = NULL;
$arguments345['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext)]);

$output344 .= ':</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['additionalAttributes'] = NULL;
$arguments347['data'] = NULL;
$arguments347['name'] = NULL;
$arguments347['value'] = NULL;
$arguments347['property'] = NULL;
$arguments347['class'] = NULL;
$arguments347['dir'] = NULL;
$arguments347['id'] = NULL;
$arguments347['lang'] = NULL;
$arguments347['style'] = NULL;
$arguments347['title'] = NULL;
$arguments347['accesskey'] = NULL;
$arguments347['tabindex'] = NULL;
$arguments347['onclick'] = NULL;
$arguments347['size'] = NULL;
$arguments347['disabled'] = NULL;
$arguments347['options'] = NULL;
$arguments347['optionsAfterContent'] = false;
$arguments347['optionValueField'] = NULL;
$arguments347['optionLabelField'] = NULL;
$arguments347['sortByOptionLabel'] = false;
$arguments347['selectAllByDefault'] = false;
$arguments347['errorClass'] = 'f3-form-error';
$arguments347['prependOptionLabel'] = NULL;
$arguments347['prependOptionValue'] = NULL;
$arguments347['multiple'] = false;
$arguments347['class'] = 'form-control';
$arguments347['id'] = 'depth';
$array349 = array (
);$arguments347['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array349);
$array350 = array (
);$arguments347['options'] = $renderingContext->getVariableProvider()->getByPath('depthOptions', $array350);
// Rendering Array
$array351 = array();
$output352 = '';

$output352 .= 'jumpToUrl(\'';
$array353 = array (
);
$output352 .= $renderingContext->getVariableProvider()->getByPath('depthBaseUrl', $array353);

$output352 .= '\'.replace(\'__DEPTH__\', this.options[this.selectedIndex].value), this);';
$array351['onchange'] = $output352;
$arguments347['additionalAttributes'] = $array351;

$output344 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output344 .= '
	</div>

	<div class="panel panel-default panel-space">
		<div class="table-fit">
			<table class="table table-striped table-hover" id="typo3-permissionList">
				<thead>
				<tr>
					<th colspan="2">&nbsp;</th>
					<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['key'] = NULL;
$arguments354['id'] = NULL;
$arguments354['default'] = NULL;
$arguments354['htmlEscape'] = NULL;
$arguments354['arguments'] = NULL;
$arguments354['extensionName'] = NULL;
$arguments354['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext)]);

$output344 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['htmlEscape'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output344 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['key'] = NULL;
$arguments358['id'] = NULL;
$arguments358['default'] = NULL;
$arguments358['htmlEscape'] = NULL;
$arguments358['arguments'] = NULL;
$arguments358['extensionName'] = NULL;
$arguments358['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext)]);

$output344 .= '</th>
					<th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['key'] = NULL;
$arguments360['id'] = NULL;
$arguments360['default'] = NULL;
$arguments360['htmlEscape'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext)]);

$output344 .= '</th>
				</tr>
				</thead>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output365 = '';

$output365 .= '
					<tr>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output498 = '';

$output498 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
$output501 = '';

$output501 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
return '
									A "normal" page row is rendered, not the root page
								';
};
$arguments502 = array();

$output501 .= NULL;

$output501 .= '

								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$output522 = '';

$output522 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$output525 = '';
$array526 = array (
);
$output525 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array526);
$array527 = array (
);
$output525 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array527);
return $output525;
};
$arguments523 = array();
$arguments523['value'] = NULL;

$output522 .= isset($arguments523['value']) ? $arguments523['value'] : $renderChildrenClosure524();

$output522 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
$array530 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array530)]);
};
$arguments528 = array();
$arguments528['maxCharacters'] = NULL;
$arguments528['append'] = '...';
$arguments528['respectWordBoundaries'] = true;
$arguments528['respectHtml'] = true;
$arguments528['maxCharacters'] = 20;

$output522 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output522 .= '
									';
return $output522;
};
$arguments504 = array();
$arguments504['action'] = NULL;
$arguments504['arguments'] = array (
);
$arguments504['controller'] = NULL;
$arguments504['extensionName'] = NULL;
$arguments504['pluginName'] = NULL;
$arguments504['pageUid'] = NULL;
$arguments504['pageType'] = 0;
$arguments504['noCache'] = false;
$arguments504['noCacheHash'] = false;
$arguments504['section'] = '';
$arguments504['format'] = '';
$arguments504['linkAccessRestrictedPages'] = false;
$arguments504['additionalParams'] = array (
);
$arguments504['absolute'] = false;
$arguments504['addQueryString'] = false;
$arguments504['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments504['addQueryStringMethod'] = NULL;
$arguments504['additionalAttributes'] = NULL;
$arguments504['data'] = NULL;
$arguments504['class'] = NULL;
$arguments504['dir'] = NULL;
$arguments504['id'] = NULL;
$arguments504['lang'] = NULL;
$arguments504['style'] = NULL;
$arguments504['title'] = NULL;
$arguments504['accesskey'] = NULL;
$arguments504['tabindex'] = NULL;
$arguments504['onclick'] = NULL;
$arguments504['name'] = NULL;
$arguments504['rel'] = NULL;
$arguments504['rev'] = NULL;
$arguments504['target'] = NULL;
$arguments504['action'] = 'edit';
// Rendering Array
$array506 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['then'] = NULL;
$arguments507['else'] = NULL;
$arguments507['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array509 = array();
$array510 = array (
);$array509['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array510);

$expression511 = function($context) {return ($context["node0"]);};
$arguments507['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression511(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array509)
					),
					$renderingContext
				);
$array512 = array (
);$arguments507['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array512);
$array513 = array (
);$arguments507['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array513);
$array506['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);
$array514 = array (
);$array506['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array514);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['action'] = NULL;
$arguments515['arguments'] = array (
);
$arguments515['controller'] = NULL;
$arguments515['extensionName'] = NULL;
$arguments515['pluginName'] = NULL;
$arguments515['pageUid'] = NULL;
$arguments515['pageType'] = 0;
$arguments515['noCache'] = false;
$arguments515['noCacheHash'] = false;
$arguments515['section'] = '';
$arguments515['format'] = '';
$arguments515['linkAccessRestrictedPages'] = false;
$arguments515['additionalParams'] = array (
);
$arguments515['absolute'] = false;
$arguments515['addQueryString'] = false;
$arguments515['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments515['addQueryStringMethod'] = NULL;
$arguments515['action'] = 'index';
// Rendering Array
$array517 = array();
$array518 = array (
);$array517['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array518);
$array519 = array (
);$array517['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array519);
$arguments515['arguments'] = $array517;
$array506['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);
$arguments504['arguments'] = $array506;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['key'] = NULL;
$arguments520['id'] = NULL;
$arguments520['default'] = NULL;
$arguments520['htmlEscape'] = NULL;
$arguments520['arguments'] = NULL;
$arguments520['extensionName'] = NULL;
$arguments520['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments504['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output501 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output501 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};
$arguments531 = array();

$output501 .= NULL;

$output501 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$output551 = '';

$output551 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments552 = array();
$arguments552['identifier'] = NULL;
$arguments552['size'] = 'small';
$arguments552['overlay'] = NULL;
$arguments552['state'] = 'default';
$arguments552['alternativeMarkupIdentifier'] = NULL;
$arguments552['identifier'] = 'actions-open';

$output551 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output551 .= '
									';
return $output551;
};
$arguments533 = array();
$arguments533['action'] = NULL;
$arguments533['arguments'] = array (
);
$arguments533['controller'] = NULL;
$arguments533['extensionName'] = NULL;
$arguments533['pluginName'] = NULL;
$arguments533['pageUid'] = NULL;
$arguments533['pageType'] = 0;
$arguments533['noCache'] = false;
$arguments533['noCacheHash'] = false;
$arguments533['section'] = '';
$arguments533['format'] = '';
$arguments533['linkAccessRestrictedPages'] = false;
$arguments533['additionalParams'] = array (
);
$arguments533['absolute'] = false;
$arguments533['addQueryString'] = false;
$arguments533['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments533['addQueryStringMethod'] = NULL;
$arguments533['additionalAttributes'] = NULL;
$arguments533['data'] = NULL;
$arguments533['class'] = NULL;
$arguments533['dir'] = NULL;
$arguments533['id'] = NULL;
$arguments533['lang'] = NULL;
$arguments533['style'] = NULL;
$arguments533['title'] = NULL;
$arguments533['accesskey'] = NULL;
$arguments533['tabindex'] = NULL;
$arguments533['onclick'] = NULL;
$arguments533['name'] = NULL;
$arguments533['rel'] = NULL;
$arguments533['rev'] = NULL;
$arguments533['target'] = NULL;
$arguments533['action'] = 'edit';
// Rendering Array
$array535 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['then'] = NULL;
$arguments536['else'] = NULL;
$arguments536['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array538 = array();
$array539 = array (
);$array538['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array539);

$expression540 = function($context) {return ($context["node0"]);};
$arguments536['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression540(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array538)
					),
					$renderingContext
				);
$array541 = array (
);$arguments536['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array541);
$array542 = array (
);$arguments536['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array542);
$array535['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);
$array543 = array (
);$array535['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array543);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['action'] = NULL;
$arguments544['arguments'] = array (
);
$arguments544['controller'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['pluginName'] = NULL;
$arguments544['pageUid'] = NULL;
$arguments544['pageType'] = 0;
$arguments544['noCache'] = false;
$arguments544['noCacheHash'] = false;
$arguments544['section'] = '';
$arguments544['format'] = '';
$arguments544['linkAccessRestrictedPages'] = false;
$arguments544['additionalParams'] = array (
);
$arguments544['absolute'] = false;
$arguments544['addQueryString'] = false;
$arguments544['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments544['addQueryStringMethod'] = NULL;
$arguments544['action'] = 'index';
// Rendering Array
$array546 = array();
$array547 = array (
);$array546['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array547);
$array548 = array (
);$array546['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array548);
$arguments544['arguments'] = $array546;
$array535['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);
$arguments533['arguments'] = $array535;
$arguments533['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['key'] = NULL;
$arguments549['id'] = NULL;
$arguments549['default'] = NULL;
$arguments549['htmlEscape'] = NULL;
$arguments549['arguments'] = NULL;
$arguments549['extensionName'] = NULL;
$arguments549['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments533['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output501 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output501 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments554 = array();
$arguments554['permission'] = NULL;
$arguments554['scope'] = NULL;
$arguments554['pageId'] = NULL;
$array556 = array (
);$arguments554['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array556);
$arguments554['scope'] = 'user';
$array557 = array (
);$arguments554['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array557);

$output501 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output501 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['section'] = NULL;
$arguments558['partial'] = NULL;
$arguments558['delegate'] = NULL;
$arguments558['renderable'] = NULL;
$arguments558['arguments'] = array (
);
$arguments558['optional'] = false;
$arguments558['default'] = NULL;
$arguments558['contentAs'] = NULL;
$arguments558['partial'] = 'Permission/Ownername';
// Rendering Array
$array560 = array();
$array561 = array (
);$array560['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array561);
$array562 = array (
);$array560['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array562);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['array'] = NULL;
$arguments563['key'] = NULL;
$arguments563['subKey'] = '';
$array565 = array (
);$arguments563['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array565);
$array566 = array (
);$arguments563['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array566);
$arguments563['subKey'] = 'username';
$array560['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);
$arguments558['arguments'] = $array560;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output501 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments567 = array();
$arguments567['permission'] = NULL;
$arguments567['scope'] = NULL;
$arguments567['pageId'] = NULL;
$array569 = array (
);$arguments567['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array569);
$arguments567['scope'] = 'group';
$array570 = array (
);$arguments567['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array570);

$output501 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);

$output501 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['section'] = NULL;
$arguments571['partial'] = NULL;
$arguments571['delegate'] = NULL;
$arguments571['renderable'] = NULL;
$arguments571['arguments'] = array (
);
$arguments571['optional'] = false;
$arguments571['default'] = NULL;
$arguments571['contentAs'] = NULL;
$arguments571['partial'] = 'Permission/Groupname';
// Rendering Array
$array573 = array();
$array574 = array (
);$array573['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array574);
$array575 = array (
);$array573['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array575);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments576 = array();
$arguments576['array'] = NULL;
$arguments576['key'] = NULL;
$arguments576['subKey'] = '';
$array578 = array (
);$arguments576['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array578);
$array579 = array (
);$arguments576['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array579);
$arguments576['subKey'] = 'title';
$array573['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext);
$arguments571['arguments'] = $array573;

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext);

$output501 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments580 = array();
$arguments580['permission'] = NULL;
$arguments580['scope'] = NULL;
$arguments580['pageId'] = NULL;
$array582 = array (
);$arguments580['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array582);
$arguments580['scope'] = 'everybody';
$array583 = array (
);$arguments580['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array583);

$output501 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output501 .= '
								</td>

								<td class="nowrap">
									<span id="el_';
$array584 = array (
);
$output501 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array584)]);

$output501 .= '">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
$output602 = '';

$output602 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array606 = array (
);
$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array606)]);

$output605 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments607 = array();
$arguments607['key'] = NULL;
$arguments607['id'] = NULL;
$arguments607['default'] = NULL;
$arguments607['htmlEscape'] = NULL;
$arguments607['arguments'] = NULL;
$arguments607['extensionName'] = NULL;
$arguments607['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext)]);

$output605 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['identifier'] = NULL;
$arguments609['size'] = 'small';
$arguments609['overlay'] = NULL;
$arguments609['state'] = 'default';
$arguments609['alternativeMarkupIdentifier'] = NULL;
$arguments609['identifier'] = 'actions-lock';

$output605 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output605 .= '
												</a>
											';
return $output605;
};
$arguments603 = array();

$output602 .= '';

$output602 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$output613 = '';

$output613 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array614 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array614)]);

$output613 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['key'] = NULL;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['htmlEscape'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$arguments615['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext)]);

$output613 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['identifier'] = NULL;
$arguments617['size'] = 'small';
$arguments617['overlay'] = NULL;
$arguments617['state'] = 'default';
$arguments617['alternativeMarkupIdentifier'] = NULL;
$arguments617['identifier'] = 'actions-unlock';

$output613 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output613 .= '
												</a>
											';
return $output613;
};
$arguments611 = array();
$arguments611['if'] = NULL;

$output602 .= '';

$output602 .= '
										';
return $output602;
};
$arguments585 = array();
$arguments585['then'] = NULL;
$arguments585['else'] = NULL;
$arguments585['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array599 = array();
$array600 = array (
);$array599['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array600);

$expression601 = function($context) {return ($context["node0"]);};
$arguments585['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression601(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array599)
					),
					$renderingContext
				);
$arguments585['__thenClosure'] = function() use ($renderingContext, $self) {
$output587 = '';

$output587 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array588 = array (
);
$output587 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array588)]);

$output587 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments589 = array();
$arguments589['key'] = NULL;
$arguments589['id'] = NULL;
$arguments589['default'] = NULL;
$arguments589['htmlEscape'] = NULL;
$arguments589['arguments'] = NULL;
$arguments589['extensionName'] = NULL;
$arguments589['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output587 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext)]);

$output587 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments591 = array();
$arguments591['identifier'] = NULL;
$arguments591['size'] = 'small';
$arguments591['overlay'] = NULL;
$arguments591['state'] = 'default';
$arguments591['alternativeMarkupIdentifier'] = NULL;
$arguments591['identifier'] = 'actions-lock';

$output587 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext);

$output587 .= '
												</a>
											';
return $output587;
};
$arguments585['__elseClosures'][] = function() use ($renderingContext, $self) {
$output593 = '';

$output593 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array594 = array (
);
$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array594)]);

$output593 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments595 = array();
$arguments595['key'] = NULL;
$arguments595['id'] = NULL;
$arguments595['default'] = NULL;
$arguments595['htmlEscape'] = NULL;
$arguments595['arguments'] = NULL;
$arguments595['extensionName'] = NULL;
$arguments595['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output593 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments595, $renderChildrenClosure596, $renderingContext)]);

$output593 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments597 = array();
$arguments597['identifier'] = NULL;
$arguments597['size'] = 'small';
$arguments597['overlay'] = NULL;
$arguments597['state'] = 'default';
$arguments597['alternativeMarkupIdentifier'] = NULL;
$arguments597['identifier'] = 'actions-unlock';

$output593 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output593 .= '
												</a>
											';
return $output593;
};

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext);

$output501 .= '
									</span>
								</td>
							';
return $output501;
};
$arguments499 = array();

$output498 .= '';

$output498 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
$output621 = '';

$output621 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return '
									Root page row is rendered
								';
};
$arguments622 = array();

$output621 .= NULL;

$output621 .= '
								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
$array626 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array626);
};
$arguments624 = array();
$arguments624['value'] = NULL;

$output621 .= isset($arguments624['value']) ? $arguments624['value'] : $renderChildrenClosure625();

$output621 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
$array629 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array629)]);
};
$arguments627 = array();
$arguments627['maxCharacters'] = NULL;
$arguments627['append'] = '...';
$arguments627['respectWordBoundaries'] = true;
$arguments627['respectHtml'] = true;
$arguments627['maxCharacters'] = 20;

$output621 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output621 .= '
								</td>
								<td></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
							';
return $output621;
};
$arguments619 = array();
$arguments619['if'] = NULL;

$output498 .= '';

$output498 .= '
						';
return $output498;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array495 = array();
$array496 = array (
);$array495['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array496);

$expression497 = function($context) {return ($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression497(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array495)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return '
									A "normal" page row is rendered, not the root page
								';
};
$arguments369 = array();

$output368 .= NULL;

$output368 .= '

								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output392 = '';
$array393 = array (
);
$output392 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array393);
$array394 = array (
);
$output392 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array394);
return $output392;
};
$arguments390 = array();
$arguments390['value'] = NULL;

$output389 .= isset($arguments390['value']) ? $arguments390['value'] : $renderChildrenClosure391();

$output389 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$array397 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array397)]);
};
$arguments395 = array();
$arguments395['maxCharacters'] = NULL;
$arguments395['append'] = '...';
$arguments395['respectWordBoundaries'] = true;
$arguments395['respectHtml'] = true;
$arguments395['maxCharacters'] = 20;

$output389 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output389 .= '
									';
return $output389;
};
$arguments371 = array();
$arguments371['action'] = NULL;
$arguments371['arguments'] = array (
);
$arguments371['controller'] = NULL;
$arguments371['extensionName'] = NULL;
$arguments371['pluginName'] = NULL;
$arguments371['pageUid'] = NULL;
$arguments371['pageType'] = 0;
$arguments371['noCache'] = false;
$arguments371['noCacheHash'] = false;
$arguments371['section'] = '';
$arguments371['format'] = '';
$arguments371['linkAccessRestrictedPages'] = false;
$arguments371['additionalParams'] = array (
);
$arguments371['absolute'] = false;
$arguments371['addQueryString'] = false;
$arguments371['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments371['addQueryStringMethod'] = NULL;
$arguments371['additionalAttributes'] = NULL;
$arguments371['data'] = NULL;
$arguments371['class'] = NULL;
$arguments371['dir'] = NULL;
$arguments371['id'] = NULL;
$arguments371['lang'] = NULL;
$arguments371['style'] = NULL;
$arguments371['title'] = NULL;
$arguments371['accesskey'] = NULL;
$arguments371['tabindex'] = NULL;
$arguments371['onclick'] = NULL;
$arguments371['name'] = NULL;
$arguments371['rel'] = NULL;
$arguments371['rev'] = NULL;
$arguments371['target'] = NULL;
$arguments371['action'] = 'edit';
// Rendering Array
$array373 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['then'] = NULL;
$arguments374['else'] = NULL;
$arguments374['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array376 = array();
$array377 = array (
);$array376['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array377);

$expression378 = function($context) {return ($context["node0"]);};
$arguments374['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression378(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array376)
					),
					$renderingContext
				);
$array379 = array (
);$arguments374['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array379);
$array380 = array (
);$arguments374['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array380);
$array373['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);
$array381 = array (
);$array373['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array381);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['action'] = NULL;
$arguments382['arguments'] = array (
);
$arguments382['controller'] = NULL;
$arguments382['extensionName'] = NULL;
$arguments382['pluginName'] = NULL;
$arguments382['pageUid'] = NULL;
$arguments382['pageType'] = 0;
$arguments382['noCache'] = false;
$arguments382['noCacheHash'] = false;
$arguments382['section'] = '';
$arguments382['format'] = '';
$arguments382['linkAccessRestrictedPages'] = false;
$arguments382['additionalParams'] = array (
);
$arguments382['absolute'] = false;
$arguments382['addQueryString'] = false;
$arguments382['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments382['addQueryStringMethod'] = NULL;
$arguments382['action'] = 'index';
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array385);
$array386 = array (
);$array384['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array386);
$arguments382['arguments'] = $array384;
$array373['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);
$arguments371['arguments'] = $array373;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments387 = array();
$arguments387['key'] = NULL;
$arguments387['id'] = NULL;
$arguments387['default'] = NULL;
$arguments387['htmlEscape'] = NULL;
$arguments387['arguments'] = NULL;
$arguments387['extensionName'] = NULL;
$arguments387['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments371['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output368 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output368 .= '
								</td>

								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return '
										Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
									';
};
$arguments398 = array();

$output368 .= NULL;

$output368 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments419 = array();
$arguments419['identifier'] = NULL;
$arguments419['size'] = 'small';
$arguments419['overlay'] = NULL;
$arguments419['state'] = 'default';
$arguments419['alternativeMarkupIdentifier'] = NULL;
$arguments419['identifier'] = 'actions-open';

$output418 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output418 .= '
									';
return $output418;
};
$arguments400 = array();
$arguments400['action'] = NULL;
$arguments400['arguments'] = array (
);
$arguments400['controller'] = NULL;
$arguments400['extensionName'] = NULL;
$arguments400['pluginName'] = NULL;
$arguments400['pageUid'] = NULL;
$arguments400['pageType'] = 0;
$arguments400['noCache'] = false;
$arguments400['noCacheHash'] = false;
$arguments400['section'] = '';
$arguments400['format'] = '';
$arguments400['linkAccessRestrictedPages'] = false;
$arguments400['additionalParams'] = array (
);
$arguments400['absolute'] = false;
$arguments400['addQueryString'] = false;
$arguments400['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments400['addQueryStringMethod'] = NULL;
$arguments400['additionalAttributes'] = NULL;
$arguments400['data'] = NULL;
$arguments400['class'] = NULL;
$arguments400['dir'] = NULL;
$arguments400['id'] = NULL;
$arguments400['lang'] = NULL;
$arguments400['style'] = NULL;
$arguments400['title'] = NULL;
$arguments400['accesskey'] = NULL;
$arguments400['tabindex'] = NULL;
$arguments400['onclick'] = NULL;
$arguments400['name'] = NULL;
$arguments400['rel'] = NULL;
$arguments400['rev'] = NULL;
$arguments400['target'] = NULL;
$arguments400['action'] = 'edit';
// Rendering Array
$array402 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['then'] = NULL;
$arguments403['else'] = NULL;
$arguments403['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array405 = array();
$array406 = array (
);$array405['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array406);

$expression407 = function($context) {return ($context["node0"]);};
$arguments403['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression407(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
$array408 = array (
);$arguments403['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array408);
$array409 = array (
);$arguments403['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array409);
$array402['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);
$array410 = array (
);$array402['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array410);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['action'] = NULL;
$arguments411['arguments'] = array (
);
$arguments411['controller'] = NULL;
$arguments411['extensionName'] = NULL;
$arguments411['pluginName'] = NULL;
$arguments411['pageUid'] = NULL;
$arguments411['pageType'] = 0;
$arguments411['noCache'] = false;
$arguments411['noCacheHash'] = false;
$arguments411['section'] = '';
$arguments411['format'] = '';
$arguments411['linkAccessRestrictedPages'] = false;
$arguments411['additionalParams'] = array (
);
$arguments411['absolute'] = false;
$arguments411['addQueryString'] = false;
$arguments411['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments411['addQueryStringMethod'] = NULL;
$arguments411['action'] = 'index';
// Rendering Array
$array413 = array();
$array414 = array (
);$array413['id'] = $renderingContext->getVariableProvider()->getByPath('currentId', $array414);
$array415 = array (
);$array413['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array415);
$arguments411['arguments'] = $array413;
$array402['returnUrl'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);
$arguments400['arguments'] = $array402;
$arguments400['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['key'] = NULL;
$arguments416['id'] = NULL;
$arguments416['default'] = NULL;
$arguments416['htmlEscape'] = NULL;
$arguments416['arguments'] = NULL;
$arguments416['extensionName'] = NULL;
$arguments416['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';
$arguments400['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output368 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output368 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['permission'] = NULL;
$arguments421['scope'] = NULL;
$arguments421['pageId'] = NULL;
$array423 = array (
);$arguments421['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array423);
$arguments421['scope'] = 'user';
$array424 = array (
);$arguments421['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array424);

$output368 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output368 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['section'] = NULL;
$arguments425['partial'] = NULL;
$arguments425['delegate'] = NULL;
$arguments425['renderable'] = NULL;
$arguments425['arguments'] = array (
);
$arguments425['optional'] = false;
$arguments425['default'] = NULL;
$arguments425['contentAs'] = NULL;
$arguments425['partial'] = 'Permission/Ownername';
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array428);
$array429 = array (
);$array427['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array429);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['array'] = NULL;
$arguments430['key'] = NULL;
$arguments430['subKey'] = '';
$array432 = array (
);$arguments430['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array432);
$array433 = array (
);$arguments430['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array433);
$arguments430['subKey'] = 'username';
$array427['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);
$arguments425['arguments'] = $array427;

$output368 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output368 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['permission'] = NULL;
$arguments434['scope'] = NULL;
$arguments434['pageId'] = NULL;
$array436 = array (
);$arguments434['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array436);
$arguments434['scope'] = 'group';
$array437 = array (
);$arguments434['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array437);

$output368 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output368 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['section'] = NULL;
$arguments438['partial'] = NULL;
$arguments438['delegate'] = NULL;
$arguments438['renderable'] = NULL;
$arguments438['arguments'] = array (
);
$arguments438['optional'] = false;
$arguments438['default'] = NULL;
$arguments438['contentAs'] = NULL;
$arguments438['partial'] = 'Permission/Groupname';
// Rendering Array
$array440 = array();
$array441 = array (
);$array440['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array441);
$array442 = array (
);$array440['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array442);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['array'] = NULL;
$arguments443['key'] = NULL;
$arguments443['subKey'] = '';
$array445 = array (
);$arguments443['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array445);
$array446 = array (
);$arguments443['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array446);
$arguments443['subKey'] = 'title';
$array440['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);
$arguments438['arguments'] = $array440;

$output368 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output368 .= '
								</td>

								<td class="nowrap">
									';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['permission'] = NULL;
$arguments447['scope'] = NULL;
$arguments447['pageId'] = NULL;
$array449 = array (
);$arguments447['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array449);
$arguments447['scope'] = 'everybody';
$array450 = array (
);$arguments447['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array450);

$output368 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output368 .= '
								</td>

								<td class="nowrap">
									<span id="el_';
$array451 = array (
);
$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array451)]);

$output368 .= '">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array473 = array (
);
$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array473)]);

$output472 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['key'] = NULL;
$arguments474['id'] = NULL;
$arguments474['default'] = NULL;
$arguments474['htmlEscape'] = NULL;
$arguments474['arguments'] = NULL;
$arguments474['extensionName'] = NULL;
$arguments474['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext)]);

$output472 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['identifier'] = NULL;
$arguments476['size'] = 'small';
$arguments476['overlay'] = NULL;
$arguments476['state'] = 'default';
$arguments476['alternativeMarkupIdentifier'] = NULL;
$arguments476['identifier'] = 'actions-lock';

$output472 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output472 .= '
												</a>
											';
return $output472;
};
$arguments470 = array();

$output469 .= '';

$output469 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array481 = array (
);
$output480 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array481)]);

$output480 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['key'] = NULL;
$arguments482['id'] = NULL;
$arguments482['default'] = NULL;
$arguments482['htmlEscape'] = NULL;
$arguments482['arguments'] = NULL;
$arguments482['extensionName'] = NULL;
$arguments482['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output480 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext)]);

$output480 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['identifier'] = NULL;
$arguments484['size'] = 'small';
$arguments484['overlay'] = NULL;
$arguments484['state'] = 'default';
$arguments484['alternativeMarkupIdentifier'] = NULL;
$arguments484['identifier'] = 'actions-unlock';

$output480 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output480 .= '
												</a>
											';
return $output480;
};
$arguments478 = array();
$arguments478['if'] = NULL;

$output469 .= '';

$output469 .= '
										';
return $output469;
};
$arguments452 = array();
$arguments452['then'] = NULL;
$arguments452['else'] = NULL;
$arguments452['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array466 = array();
$array467 = array (
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array467);

$expression468 = function($context) {return ($context["node0"]);};
$arguments452['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array466)
					),
					$renderingContext
				);
$arguments452['__thenClosure'] = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array455 = array (
);
$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array455)]);

$output454 .= '"
													data-lockstate="1"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['key'] = NULL;
$arguments456['id'] = NULL;
$arguments456['default'] = NULL;
$arguments456['htmlEscape'] = NULL;
$arguments456['arguments'] = NULL;
$arguments456['extensionName'] = NULL;
$arguments456['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext)]);

$output454 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['identifier'] = NULL;
$arguments458['size'] = 'small';
$arguments458['overlay'] = NULL;
$arguments458['state'] = 'default';
$arguments458['alternativeMarkupIdentifier'] = NULL;
$arguments458['identifier'] = 'actions-lock';

$output454 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output454 .= '
												</a>
											';
return $output454;
};
$arguments452['__elseClosures'][] = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
												<a
													class="editlock btn btn-default"
													data-page="';
$array461 = array (
);
$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array461)]);

$output460 .= '"
													data-lockstate="0"
													title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['key'] = NULL;
$arguments462['id'] = NULL;
$arguments462['default'] = NULL;
$arguments462['htmlEscape'] = NULL;
$arguments462['arguments'] = NULL;
$arguments462['extensionName'] = NULL;
$arguments462['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext)]);

$output460 .= '"
												>
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['identifier'] = NULL;
$arguments464['size'] = 'small';
$arguments464['overlay'] = NULL;
$arguments464['state'] = 'default';
$arguments464['alternativeMarkupIdentifier'] = NULL;
$arguments464['identifier'] = 'actions-unlock';

$output460 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output460 .= '
												</a>
											';
return $output460;
};

$output368 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output368 .= '
									</span>
								</td>
							';
return $output368;
};
$arguments366['__elseClosures'][] = function() use ($renderingContext, $self) {
$output486 = '';

$output486 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
return '
									Root page row is rendered
								';
};
$arguments487 = array();

$output486 .= NULL;

$output486 .= '
								<td align="left" class="nowrap">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
$array491 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array491);
};
$arguments489 = array();
$arguments489['value'] = NULL;

$output486 .= isset($arguments489['value']) ? $arguments489['value'] : $renderChildrenClosure490();

$output486 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$array494 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array494)]);
};
$arguments492 = array();
$arguments492['maxCharacters'] = NULL;
$arguments492['append'] = '...';
$arguments492['respectWordBoundaries'] = true;
$arguments492['respectHtml'] = true;
$arguments492['maxCharacters'] = 20;

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output486 .= '
								</td>
								<td></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
								<td class="nowrap"></td>
							';
return $output486;
};

$output365 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '
					</tr>
				';
return $output365;
};
$arguments362 = array();
$arguments362['each'] = NULL;
$arguments362['as'] = NULL;
$arguments362['key'] = NULL;
$arguments362['reverse'] = false;
$arguments362['iteration'] = NULL;
$array364 = array (
);$arguments362['each'] = $renderingContext->getVariableProvider()->getByPath('viewTree', $array364);
$arguments362['as'] = 'data';

$output344 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output344 .= '
			</table>
		</div>
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
$array632 = array (
);return $renderingContext->getVariableProvider()->getByPath('cshItem', $array632);
};
$arguments630 = array();
$arguments630['value'] = NULL;

$output344 .= isset($arguments630['value']) ? $arguments630['value'] : $renderChildrenClosure631();

$output344 .= '

	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments633 = array();
$arguments633['key'] = NULL;
$arguments633['id'] = NULL;
$arguments633['default'] = NULL;
$arguments633['htmlEscape'] = NULL;
$arguments633['arguments'] = NULL;
$arguments633['extensionName'] = NULL;
$arguments633['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext)]);

$output344 .= ':</h3>
	<div class="beuser-legend">
		<table>
			<tr>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">1</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments635 = array();
$arguments635['key'] = NULL;
$arguments635['id'] = NULL;
$arguments635['default'] = NULL;
$arguments635['htmlEscape'] = NULL;
$arguments635['arguments'] = NULL;
$arguments635['extensionName'] = NULL;
$arguments635['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext)]);

$output344 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['key'] = NULL;
$arguments637['id'] = NULL;
$arguments637['default'] = NULL;
$arguments637['htmlEscape'] = NULL;
$arguments637['arguments'] = NULL;
$arguments637['extensionName'] = NULL;
$arguments637['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext)]);

$output344 .= '</td>
			</tr>
			<tr>
				<td class="vr nowrap"><span></span></td>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">2</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments639 = array();
$arguments639['key'] = NULL;
$arguments639['id'] = NULL;
$arguments639['default'] = NULL;
$arguments639['htmlEscape'] = NULL;
$arguments639['arguments'] = NULL;
$arguments639['extensionName'] = NULL;
$arguments639['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext)]);

$output344 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments641 = array();
$arguments641['key'] = NULL;
$arguments641['id'] = NULL;
$arguments641['default'] = NULL;
$arguments641['htmlEscape'] = NULL;
$arguments641['arguments'] = NULL;
$arguments641['extensionName'] = NULL;
$arguments641['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext)]);

$output344 .= '</td>
			</tr>
			<tr>
				<td class="vr nowrap"><span></span></td>
				<td class="vr nowrap"><span></span></td>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">3</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['key'] = NULL;
$arguments643['id'] = NULL;
$arguments643['default'] = NULL;
$arguments643['htmlEscape'] = NULL;
$arguments643['arguments'] = NULL;
$arguments643['extensionName'] = NULL;
$arguments643['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext)]);

$output344 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments645 = array();
$arguments645['key'] = NULL;
$arguments645['id'] = NULL;
$arguments645['default'] = NULL;
$arguments645['htmlEscape'] = NULL;
$arguments645['arguments'] = NULL;
$arguments645['extensionName'] = NULL;
$arguments645['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext)]);

$output344 .= '</td>
			</tr>
			<tr>
				<td class="vr nowrap"><span></span></td>
				<td class="vr nowrap"><span></span></td>
				<td class="vr nowrap"><span></span></td>
				<td class="edge nowrap"><span><span></span></span></td>
				<td class="hr nowrap"><span></span></td>
				<td class="nowrap"><span class="number">4</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments647 = array();
$arguments647['key'] = NULL;
$arguments647['id'] = NULL;
$arguments647['default'] = NULL;
$arguments647['htmlEscape'] = NULL;
$arguments647['arguments'] = NULL;
$arguments647['extensionName'] = NULL;
$arguments647['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext)]);

$output344 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments649 = array();
$arguments649['key'] = NULL;
$arguments649['id'] = NULL;
$arguments649['default'] = NULL;
$arguments649['htmlEscape'] = NULL;
$arguments649['arguments'] = NULL;
$arguments649['extensionName'] = NULL;
$arguments649['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext)]);

$output344 .= '</td>
			</tr>
			<tr>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments651 = array();
$arguments651['identifier'] = NULL;
$arguments651['size'] = 'small';
$arguments651['overlay'] = NULL;
$arguments651['state'] = 'default';
$arguments651['alternativeMarkupIdentifier'] = NULL;
$arguments651['identifier'] = 'status-status-permission-granted';

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$output344 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments653 = array();
$arguments653['identifier'] = NULL;
$arguments653['size'] = 'small';
$arguments653['overlay'] = NULL;
$arguments653['state'] = 'default';
$arguments653['alternativeMarkupIdentifier'] = NULL;
$arguments653['identifier'] = 'status-status-permission-denied';

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);

$output344 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments655 = array();
$arguments655['identifier'] = NULL;
$arguments655['size'] = 'small';
$arguments655['overlay'] = NULL;
$arguments655['state'] = 'default';
$arguments655['alternativeMarkupIdentifier'] = NULL;
$arguments655['identifier'] = 'status-status-permission-granted';

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);

$output344 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['identifier'] = NULL;
$arguments657['size'] = 'small';
$arguments657['overlay'] = NULL;
$arguments657['state'] = 'default';
$arguments657['alternativeMarkupIdentifier'] = NULL;
$arguments657['identifier'] = 'status-status-permission-denied';

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output344 .= '</td>
				<td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments659 = array();
$arguments659['identifier'] = NULL;
$arguments659['size'] = 'small';
$arguments659['overlay'] = NULL;
$arguments659['state'] = 'default';
$arguments659['alternativeMarkupIdentifier'] = NULL;
$arguments659['identifier'] = 'status-status-permission-denied';

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments659, $renderChildrenClosure660, $renderingContext);

$output344 .= '</td>
				<td class="nowrap"><span class="number">5</span></td>
				<td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure662 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments661 = array();
$arguments661['key'] = NULL;
$arguments661['id'] = NULL;
$arguments661['default'] = NULL;
$arguments661['htmlEscape'] = NULL;
$arguments661['arguments'] = NULL;
$arguments661['extensionName'] = NULL;
$arguments661['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments661, $renderChildrenClosure662, $renderingContext)]);

$output344 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments663 = array();
$arguments663['key'] = NULL;
$arguments663['id'] = NULL;
$arguments663['default'] = NULL;
$arguments663['htmlEscape'] = NULL;
$arguments663['arguments'] = NULL;
$arguments663['extensionName'] = NULL;
$arguments663['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments663, $renderChildrenClosure664, $renderingContext)]);

$output344 .= '</td>
			</tr>
		</table>
	</div>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments665 = array();
$arguments665['key'] = NULL;
$arguments665['id'] = NULL;
$arguments665['default'] = NULL;
$arguments665['htmlEscape'] = NULL;
$arguments665['arguments'] = NULL;
$arguments665['extensionName'] = NULL;
$arguments665['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext)]);

$output344 .= '</p>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments667 = array();
$arguments667['identifier'] = NULL;
$arguments667['size'] = 'small';
$arguments667['overlay'] = NULL;
$arguments667['state'] = 'default';
$arguments667['alternativeMarkupIdentifier'] = NULL;
$arguments667['identifier'] = 'status-status-permission-granted';

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output344 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments669 = array();
$arguments669['key'] = NULL;
$arguments669['id'] = NULL;
$arguments669['default'] = NULL;
$arguments669['htmlEscape'] = NULL;
$arguments669['arguments'] = NULL;
$arguments669['extensionName'] = NULL;
$arguments669['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Granted';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext)]);

$output344 .= '<br/>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['identifier'] = NULL;
$arguments671['size'] = 'small';
$arguments671['overlay'] = NULL;
$arguments671['state'] = 'default';
$arguments671['alternativeMarkupIdentifier'] = NULL;
$arguments671['identifier'] = 'status-status-permission-denied';

$output344 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output344 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments673 = array();
$arguments673['key'] = NULL;
$arguments673['id'] = NULL;
$arguments673['default'] = NULL;
$arguments673['htmlEscape'] = NULL;
$arguments673['arguments'] = NULL;
$arguments673['extensionName'] = NULL;
$arguments673['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Denied';

$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext)]);

$output344 .= '
	</p>
';
return $output344;
};
$arguments342 = array();
$arguments342['name'] = NULL;
$arguments342['name'] = 'content';

$output334 .= NULL;

$output334 .= '
';

return $output334;
}


}
#