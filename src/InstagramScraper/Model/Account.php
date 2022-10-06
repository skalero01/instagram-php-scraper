<?php

namespace InstagramScraper\Model;

/**
 * Class Account
 * @package InstagramScraper\Model
 */
class Account extends AbstractModel
{
    /**
     * User id
     * @var string
     */
    public $id = 0;
    
    /**
     * User id
     * @var string
     */
    public $fbid = 0;

    /**
     * Username
     * @var string
     */
    public $username = '';

    /**
     * Full name
     * @var string
     */
    public $fullName = '';

    /**
     * Profile picture url
     * @var string
     */
    public $profilePicUrl = '';

    /**
     * Profile picture url HD
     * @var string
     */
    public $profilePicUrlHd = '';

    /**
     * Information filled by user
     * @var string
     */
    public $biography = '';

    /**
     * Url provided by user in profile
     * @var string
     */
    public $externalUrl = '';

    /**
     * Number of subscriptions
     * @var integer
     */
    public $followsCount = 0;

    /**
     * Number of followers
     * @var integer
     */
    public $followedByCount = 0;

    /**
     * Number of medias published by user
     * @var integer
     */
    public $mediaCount = 0;

    /**
     * true if account is private
     * @var boolean
     */
    public $isPrivate = false;

    /**
     * true if verified by Instagram as celebrity
     * @var boolean
     */
    public $isVerified = false;

    /**
     * @var bool
     */
    public $isLoaded = false;

    /**
     * @var Media[]
     */
    public $medias = [];

    /**
     * @var bool
     */
    public $blockedByViewer = false;

    /**
     * @var bool
     */
    public $countryBlock = false;

    /**
     * @var bool
     */
    public $followedByViewer = false;

    /**
     * @var bool
     */
    public $followsViewer = false;

    /**
     * @var bool
     */
    public $hasChannel = false;

    /**
     * @var bool
     */
    public $hasClips = false;

    /**
     * @var bool
     */
    public $hasGuides = false;

    /**
     * @var bool
     */
    public $hasBlockedViewer = false;

    /**
     * @var int
     */
    public $highlightReelCount = 0;

    /**
     * @var bool
     */
    public $hasRequestedViewer = false;

    /**
     * @var bool
     */
    public $isBusinessAccount = false;

    /**
     * @var bool
     */
    public $isProfessionalAccount = false;

    /**
     * @var bool
     */
    public $isJoinedRecently = false;

    /**
     * @var string
     */
    public $businessCategoryName = '';

    /**
     * @var string
     */
    public $businessEmail = '';

    /**
     * @var string
     */
    public $businessPhoneNumber = '';

    /**
     * @var string
     */
    public $businessAddressJson = '{}';

    /**
     * @var bool
     */
    public $requestedByViewer = false;

    /**
     * @var string
     */
    public $connectedFbPage = '';
    
    /**
     * @var string
     */
    public $categoryName = '';

    /**
     * @return bool
     */
    public function isLoaded()
    {
        return $this->isLoaded;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return int
     */
    public function getId()
    {
        if (PHP_INT_SIZE > 4) {
            $this->id = (int)$this->id;
        }

        return $this->id;
    }

    /**
     * @return int
     */
    public function getFbid()
    {
        if (PHP_INT_SIZE > 4) {
            $this->fbid = (int)$this->fbid;
        }

        return $this->fbid;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getProfilePicUrl()
    {
        return $this->profilePicUrl;
    }

    /**
     * @return string
     */
    public function getProfilePicUrlHd()
    {
        $toReturn = $this->profilePicUrl;

        if ($this->profilePicUrlHd !== '') {
            $toReturn = $this->profilePicUrlHd;
        }

        return $toReturn;
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @return int
     */
    public function getFollowsCount()
    {
        return $this->followsCount;
    }

    /**
     * @return int
     */
    public function getFollowedByCount()
    {
        return $this->followedByCount;
    }

    /**
     * @return int
     */
    public function getMediaCount()
    {
        return $this->mediaCount;
    }

    /**
     * @return bool
     */
    public function isPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * @return bool
     */
    public function isVerified()
    {
        return $this->isVerified;
    }

    /**
     * @return Media[]
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param Media $media
     * @return Account
     */
    public function addMedia(Media $media)
    {
        $this->medias[] = $media;

        return $this;
    }

    /**
     * @return bool
     */
    public function isBlockedByViewer()
    {
        return $this->blockedByViewer;
    }

    /**
     * @return bool
     */
    public function isCountryBlock()
    {
        return $this->countryBlock;
    }

    /**
     * @return bool
     */
    public function isFollowedByViewer()
    {
        return $this->followedByViewer;
    }

    /**
     * @return bool
     */
    public function isFollowsViewer()
    {
        return $this->followsViewer;
    }

    /**
     * @return bool
     */
    public function isHasChannel()
    {
        return $this->hasChannel;
    }

    /**
     * @return bool
     */
    public function isHasClips()
    {
        return $this->hasClips;
    }    

    /**
     * @return bool
     */
    public function isHasGuides()
    {
        return $this->hasGuides;
    }
    /**
     * @return bool
     */
    public function isHasBlockedViewer()
    {
        return $this->hasBlockedViewer;
    }

    /**
     * @return int
     */
    public function getHighlightReelCount()
    {
        return $this->highlightReelCount;
    }

    /**
     * @return bool
     */
    public function isHasRequestedViewer()
    {
        return $this->hasRequestedViewer;
    }

    /**
     * @return bool
     */
    public function isBusinessAccount()
    {
        return $this->isBusinessAccount;
    }

    /**
     * @return bool
     */
    public function isProfessionalAccount()
    {
        return $this->isProfessionalAccount;
    }

    /**
     * @return bool
     */
    public function isJoinedRecently()
    {
        return $this->isJoinedRecently;
    }

    /**
     * @return string
     */
    public function getBusinessCategoryName()
    {
        return $this->businessCategoryName;
    }

    /**
     * @return string
     */
    public function getBusinessEmail()
    {
        return $this->businessEmail;
    }

    /**
     * @return string
     */
    public function getBusinessPhoneNumber()
    {
        return $this->businessPhoneNumber;
    }

    /**
     * @return string
     */
    public function getBusinessAddressJson()
    {
        return $this->businessAddressJson;
    }

    /**
     * @return bool
     */
    public function isRequestedByViewer()
    {
        return $this->requestedByViewer;
    }

    /**
     * @return string
     */
    public function getConnectedFbPage()
    {
        return $this->connectedFbPage;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    /**
     * @param $value
     * @param $prop
     * @param $array
     */
    public function initPropertiesCustom($value, $prop, $array)
    {
        switch ($prop) {
            case 'id':
            case 'pk':
                $this->id = $value;
                break;
            case 'fbid':
                $this->fbid = $value;
                break;
            case 'username':
                $this->username = $value;
                break;
            case 'full_name':
                $this->fullName = $value;
                break;
            case 'profile_pic_url':
                $this->profilePicUrl = $value;
                break;
            case 'profile_pic_url_hd':
                $this->profilePicUrlHd = $value;
                break;
            case 'biography':
                $this->biography = $value;
                break;
            case 'external_url':
                $this->externalUrl = $value;
                break;
            case 'edge_follow':
                $this->followsCount = !empty($array[$prop]['count']) ? (int)$array[$prop]['count'] : 0;
                break;
            case 'edge_followed_by':
                $this->followedByCount = !empty($array[$prop]['count']) ? (int)$array[$prop]['count'] : 0;
                break;
            case 'follower_count':
                $this->followedByCount = empty($array['edge_followed_by']['count']) ? $value : 0;
                break;
            case 'edge_owner_to_timeline_media':
                $this->initMedia($array[$prop]);
                break;
            case 'is_private':
                $this->isPrivate = (bool)$value;
                break;
            case 'is_verified':
                $this->isVerified = (bool)$value;
                break;
            case 'blocked_by_viewer':
                $this->blockedByViewer = (bool)$value;
                break;
            case 'country_block':
                $this->countryBlock = (bool)$value;
                break;
            case 'followed_by_viewer':
                $this->followedByViewer = $value;
                break;
            case 'follows_viewer':
                $this->followsViewer = $value;
                break;
            case 'has_clips':
                $this->hasClips = (bool)$value;
                break;
            case 'has_guides':
                $this->hasGuides = (bool)$value;
                break;
            case 'has_channel':
                $this->hasChannel = (bool)$value;
                break;
            case 'has_blocked_viewer':
                $this->hasBlockedViewer = (bool)$value;
                break;
            case 'highlight_reel_count':
                $this->highlightReelCount = (int)$value;
                break;
            case 'has_requested_viewer':
                $this->hasRequestedViewer = (bool)$value;
                break;
            case 'is_business_account':
                $this->isBusinessAccount = (bool)$value;
                break;
            case 'is_professional_account':
                $this->isProfessionalAccount = (bool)$value;
                break;
            case 'is_joined_recently':
                $this->isJoinedRecently = (bool)$value;
                break;
            case 'business_category_name':
                $this->businessCategoryName = $value;
                break;
            case 'business_email':
                $this->businessEmail = $value;
                break;
            case 'business_phone_number':
                $this->businessPhoneNumber = $value;
                break;
            case 'business_address_json':
                $this->businessAddressJson = $value;
                break;
            case 'requested_by_viewer':
                $this->requestedByViewer = (bool)$value;
                break;
            case 'connected_fb_page':
                $this->connectedFbPage = $value;
                break;
            case 'category_name':
                $this->categoryName = $value;
                break;
        }
    }

    /**
     * @param array $array
     */
    public function initMedia($array)
    {
        $this->mediaCount = !empty($array['count']) ? $array['count'] : 0;
        if (!$this->mediaCount || !isset($array['edges']) || !is_array($array['edges'])) {
            return;
        }

        $nodes = $array['edges'];
        foreach ($nodes as $mediaArray) {
            $media = Media::create($mediaArray['node']);
            if ($media instanceof Media) {
                $this->addMedia($media);
            }
        }
    }
}
