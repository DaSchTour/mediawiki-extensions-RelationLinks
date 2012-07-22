<?php
class RelationLinksHooks { 
	function addRelationLinks( &$out, &$sk ) {
		$rlMainpage = Title::newFromText(wfMsg('Mainpage'));
		$out->addLink( array(
		  'rel' => 'start',
		  'type' => 'text/html',
		  'title' => wfMsg('Mainpage'),
		  'href' => $rlMainpage->getLocalURL(),
		) );
		$rlHelppage = Title::newFromText(wfMsg('Helppage'));
		$out->addLink( array(
		  'rel' => 'help',
		  'type' => 'text/html',
		  'title' => wfMsg('Helppage'),
		  'href' => $rlHelppage->getLocalURL(),
		) );
		$rlAllpages = Title::newFromText(wfMsg('Allpages'));
		$out->addLink( array(
		  'rel' => 'index',
		  'type' => 'text/html',
		  'title' => wfMsg('Allpages'),
		  'href' => $rlAllpages->getLocalURL(),
		) );
		$rlSearch = Title::newFromText(wfMsg('Search'));
		$out->addLink( array(
		  'rel' => 'search',
		  'type' => 'text/html',
		  'title' => wfMsg('Search'),
		  'href' => $rlSearch->getLocalURL(),
		) );
		$rlNamespace = $out->getTitle()->getNsText();
		if ( strlen($rlNamespace) > 1 ) {
			$rlNamespace = $rlNamespace . ':';
		}
		$rlSupPage = Title::newFromText($rlNamespace.$out->getTitle()->getBaseText());
		$out->addLink( array(
		  'rel' => 'up',
		  'type' => 'text/html',
		  'title' => $rlNamespace . $out->getTitle()->getBaseText(),
		  'href' => $rlSupPage->getLocalURL(),
		) );
		return true;
	}
}