const ServerSideRender = wp.serverSideRender;
const { registerBlockType } = wp.blocks;
const { TextControl } = wp.components;
const { __ } = wp.i18n;
const { InspectorControls } = wp.blockEditor;
const { Panel, PanelBody, PanelRow } = wp.components;
const { createElement, Fragment } = wp.element;
const blockName = "wp-pusher-cta-block/wppusher-cta";
registerBlockType(blockName, {
  title: "WP Pusher CTA",
  description: "A block that renders a CTA to try WP Pusher",
  category: "widgets",
  edit(props) {
    return createElement(Fragment, {}, [
      createElement(
        InspectorControls,
        {},
        [
          createElement(Panel, {}, [
            createElement(PanelBody, {}, [
              createElement(PanelRow, {}, [
                createElement(TextControl, {
                  label: __("Message"),
                  value: props.attributes.message,
                  onChange: function (update) {
                    props.setAttributes({
                      message: update,
                    });
                  },
                }),
              ]),
            ]),
          ]),
        ],
        createElement(ServerSideRender, {
          block: blockName,
          attributes: props.attributes,
        })
      ),
    ]);
  },
  save() {
    return null;
  },
});
