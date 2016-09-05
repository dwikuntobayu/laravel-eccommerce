<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2013
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2016
 */

$enc = $this->encoder();
$errors = $this->get( 'summaryErrorCodes', array() );

?>
<?php $this->block()->start( 'common/summary/service' ); ?>
<div class="common-summary-service container">
	<h2><?php echo $enc->html( $this->translate( 'client', 'Services' ), $enc::TRUST ); ?></h2>
	<div class="item delivery <?php echo ( isset( $errors['service']['delivery'] ) ? 'error' : '' ); ?>">
		<div class="header">
			<h3><?php echo $enc->html( $this->translate( 'client', 'delivery' ), $enc::TRUST ); ?></h3>
<?php if( isset( $this->summaryUrlServiceDelivery ) ) : ?>
			<a class="modify" href="<?php echo $enc->attr( $this->summaryUrlServiceDelivery ); ?>"><?php echo $enc->html( $this->translate( 'client', 'Change' ), $enc::TRUST ); ?></a>
<?php endif; ?>
		</div>
<?php try { $service = $this->summaryBasket->getService( 'delivery' ); ?>
		<div class="item">
<?php	if( ( $url = $service->getMediaUrl() ) != '' ) : ?>
			<div class="item-icons">
				<img src="<?php echo $enc->attr( $this->content( $url ) ); ?>" />
			</div>
<?php	endif; ?>
			<h4><?php echo $enc->html( $service->getName() ); ?></h4>
		</div>
<?php	if( count( $service->getAttributes() ) > 0 ) : ?>
		<ul class="attr-list">
<?php		foreach( $service->getAttributes() as $attribute ) : ?>
<?php			if( $attribute->getType() === 'delivery' ) : ?>
			<li class="da-<?php echo $enc->attr( $attribute->getCode() ); ?>">
				<span class="name"><?php echo $enc->html( ( $attribute->getName() != '' ? $attribute->getName() : $this->translate( 'client/html/service', $attribute->getCode() ) ) ); ?></span>
<?php				switch( $attribute->getValue() ) : case 'array': case 'object': ?>
				<span class="value"><?php echo $enc->html( join( ', ', (array) $attribute->getValue() ) ); ?></span>
<?php					break; default: ?>
				<span class="value"><?php echo $enc->html( $attribute->getValue() ); ?></span>
<?php				endswitch; ?>
			</li>
<?php			endif; ?>
<?php		endforeach; ?>
		</ul>
<?php	endif; ?>
<?php } catch( Exception $e ) { ; } ?>
	</div><!--
	--><div class="item payment <?php echo ( isset( $errors['service']['payment'] ) ? 'error' : '' ); ?>">
		<div class="header">
			<h3><?php echo $enc->html( $this->translate( 'client', 'payment' ), $enc::TRUST ); ?></h3>
<?php if( isset( $this->summaryUrlServicePayment ) ) : ?>
			<a class="modify" href="<?php echo $enc->attr( $this->summaryUrlServicePayment ); ?>"><?php echo $enc->html( $this->translate( 'client', 'Change' ), $enc::TRUST ); ?></a>
<?php endif; ?>
		</div>
<?php try { $service = $this->summaryBasket->getService( 'payment' ); ?>
		<div class="item">
<?php	if( ( $url = $service->getMediaUrl() ) != '' ) : ?>
			<div class="item-icons">
				<img src="<?php echo $this->content( $url ); ?>" />
			</div>
<?php	endif; ?>
			<h4><?php echo $service->getName(); ?></h4>
		</div>
<?php	if( count( $service->getAttributes() ) > 0 ) : ?>
		<ul class="attr-list">
<?php		foreach( $service->getAttributes() as $attribute ) : ?>
<?php			if( $attribute->getType() === 'payment' ) : ?>
				<li class="pa-<?php echo $enc->attr( $attribute->getCode() ); ?>">
					<span class="name"><?php echo $enc->html( ( $attribute->getName() != '' ? $attribute->getName() : $this->translate( 'client/code', $attribute->getCode() ) ) ); ?></span>
<?php				switch( $attribute->getValue() ) : case 'array': case 'object': ?>
					<span class="value"><?php echo $enc->html( join( ', ', (array) $attribute->getValue() ) ); ?></span>
<?php					break; default: ?>
					<span class="value"><?php echo $enc->html( $attribute->getValue() ); ?></span>
<?php				endswitch; ?>
				</li>
<?php			endif; ?>
<?php		endforeach; ?>
		</ul>
<?php	endif; ?>
<?php } catch( Exception $e ) { ; } ?>
	</div>
<?php echo $this->get( 'serviceBody' ); ?>
</div>
<?php $this->block()->stop(); ?>
<?php echo $this->block()->get( 'common/summary/service' ); ?>
