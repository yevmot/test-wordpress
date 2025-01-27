/**
 * External dependencies
 */
import classnames from 'classnames';

import { useBlockProps, getColorClassName } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

const save = ( props ) => {
	const { attributes } = props;
	const {
		backgroundColor,
		customBackgroundColor,
		iconColor,
		customIconColor,
		borderColor,
		customBorderColor,
		darkBackgroundColor,
		darkIconColor,
		darkBorderColor,
	} = attributes;

	const backgroundColorClass = getColorClassName(
		'background-color',
		backgroundColor
	);

	const iconColorClass = getColorClassName( 'color', iconColor );
	const borderColorClass = getColorClassName( 'border-color', borderColor );

	const classes = classnames( 'js-stylizedx-switcher', {
		[ backgroundColorClass ]: backgroundColorClass,
		[ iconColorClass ]: iconColorClass,
		[ borderColorClass ]: borderColorClass,
	} );

	const htmlDarkStyles = `html[data-scheme="dark"] .js-stylizedx-switcher {
		${
			darkBackgroundColor
				? `background-color: ${ darkBackgroundColor } !important;`
				: ''
		}
		${ darkIconColor ? `color: ${ darkIconColor } !important;` : '' }
		${ darkBorderColor ? `border-color: ${ darkBorderColor } !important;` : '' }
	}`;

	const styles = {
		backgroundColor: backgroundColorClass
			? undefined
			: customBackgroundColor,
		color: iconColorClass ? undefined : customIconColor,
		borderColor: borderColorClass ? undefined : customBorderColor,
	};

	return (
		<button
			{ ...useBlockProps.save( {
				className: classes,
				style: styles,
			} ) }
		>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 24 24"
				width="24"
				height="24"
				className="stylizedx-switcher-light"
			>
				<path fill="none" d="M0 0h24v24H0z"></path>
				<path d="M11.38 2.019a7.5 7.5 0 1 0 10.6 10.6C21.662 17.854 17.316 22 12.001 22 6.477 22 2 17.523 2 12c0-5.315 4.146-9.661 9.38-9.981z"></path>
			</svg>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 24 24"
				width="24"
				height="24"
				className="stylizedx-switcher-dark"
			>
				<path fill="none" d="M0 0h24v24H0z"></path>
				<path d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z"></path>
			</svg>
			{ ( darkBackgroundColor || darkIconColor || darkBorderColor ) && (
				<style>{ htmlDarkStyles }</style>
			) }
		</button>
	);
};

export default save;
