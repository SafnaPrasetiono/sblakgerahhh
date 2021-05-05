"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var tslib_1 = require("tslib");
var react_1 = tslib_1.__importDefault(require("react"));
var styled_components_1 = tslib_1.__importDefault(require("styled-components"));
var StyledCornerDownRight = styled_components_1.default.i(templateObject_1 || (templateObject_1 = tslib_1.__makeTemplateObject(["\n  &{box-sizing:border-box;position:relative;display:block;transform:scale(var(--ggs,1));width:22px;height:22px}&::after,&::before{content:\"\";display:block;box-sizing:border-box;position:absolute;right:3px}&::after{width:8px;height:8px;border-top:2px solid;border-right:2px solid;transform:rotate(45deg);bottom:3px}&::before{width:16px;height:12px;border-bottom-left-radius:4px;border-bottom:2px solid;border-left:2px solid;bottom:6px}\n"], ["\n  &{box-sizing:border-box;position:relative;display:block;transform:scale(var(--ggs,1));width:22px;height:22px}&::after,&::before{content:\"\";display:block;box-sizing:border-box;position:absolute;right:3px}&::after{width:8px;height:8px;border-top:2px solid;border-right:2px solid;transform:rotate(45deg);bottom:3px}&::before{width:16px;height:12px;border-bottom-left-radius:4px;border-bottom:2px solid;border-left:2px solid;bottom:6px}\n"])));
exports.CornerDownRight = react_1.default.forwardRef(function (props, ref) {
    return (react_1.default.createElement(react_1.default.Fragment, null,
        react_1.default.createElement(StyledCornerDownRight, tslib_1.__assign({}, props, { ref: ref, "icon-role": "corner-down-right" }))));
});
var templateObject_1;
//# sourceMappingURL=CornerDownRight.js.map