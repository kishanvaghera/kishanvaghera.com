import { StyleSheet, Text, View, Image, TouchableOpacity,Dimensions } from 'react-native'
import React,{useState,useEffect} from 'react'
import { useDispatch, useSelector } from 'react-redux'
import AsyncStorage from '@react-native-async-storage/async-storage'
import { logout } from '../../Redux/actions/loginActions'
import { moderateScale, scale } from '../Common/Scalling'
import images from '../../assets'
import { heightPercentageToDP, widthPercentageToDP } from 'react-native-responsive-screen'
import { useNavigation } from '@react-navigation/native'
import theme from '../Theme/ThemeConfig'
import Icon from '../Common/VectorIcon'
import { Divider } from 'native-base'
import * as APIService from '../Services/APIService';
import apiUrls from '../Services/ApiUrls';

const CustomSidebar = () => {
  const loggedData = useSelector(state => state)
  const dispatch = useDispatch();
  const navigation=useNavigation();
  const currentScreen = navigation?.getCurrentRoute()?.name;

  const MorePagesListArr=["MoreList","AboutUs","ContactUs","FAQ","MyOrders","PrivacyPolicy","ProductsPlans","TermsConditios"];

  const [UserForm,setUserForm]=useState({
    tProfilePic:"",
  });

  useEffect(()=>{
    const PostData={action:"GetLoginData"}
      APIService.apiAction(PostData, apiUrls.auth).then(res => {
          if(res.status==411){
            AsyncStorage.clear()
            .then(() => console.log('AsyncStorage cleared successfully 18'))
            .catch((err) => console.error(err));
            dispatch(logout(''));
          }else{
            if(res.status==200){
              const dd=res.data;
              setUserForm(prevState=>{
                return{
                  ...prevState,
                  tProfilePic:dd.tProfilePic
                }
              });
            }
          }
      })
  },[currentScreen])

  const [imageHeight, setImageHeight] = useState(0);

  const onImageLoad = event => {
      const screenWidth = Dimensions.get('window').width;
      const { width, height } = event.nativeEvent.source;
      const aspectRatio = width / height;
      const imageHeight = screenWidth / aspectRatio;
      setImageHeight(imageHeight);
  };

  const AccountDelete=()=>{
    const PostData={action:"AccountDelete"}
    APIService.apiAction(PostData, apiUrls.auth).then(res => {
        if(res.status==200){
          AsyncStorage.clear()
          .then(() => console.log('AsyncStorage cleared successfully 18'))
          .catch((err) => console.error(err));
          dispatch(logout(''));
        }
    })
  }

  return (
    <View style={{ height: heightPercentageToDP('100%') }}>
      <TouchableOpacity onPress={()=>{ navigation.navigate('Profile') }} style={{ alignItems: 'center', marginVertical: 20,backgroundColor:theme.colors.lighBlue,width:widthPercentageToDP('70%'),alignSelf:'center',borderRadius:20,flexDirection:'row',paddingHorizontal:10,paddingVertical:20,justifyContent:'space-between' }}>
        <Image
          source={UserForm?.tProfilePic == "" ? images.profile : { uri: UserForm?.tProfilePic }}
          style={{ width: 55, height: 55, borderRadius: 100 }}
        />
        <View>
          <Text style={{ fontSize: 15, fontWeight: 'bold', color: 'black',width:widthPercentageToDP('40%'),marginLeft:5 }}>
            {loggedData?.user?.vFirstName} {loggedData?.user?.vLastName}
          </Text>
          <Text style={{marginLeft:5}}>Edit Profile</Text>
        </View>
        <Icon LibraryName="Feather" IconName="chevron-right" IconSize={20} IconColor={theme.colors.textColor}/>
      </TouchableOpacity>

      <View style={{width:widthPercentageToDP('70%'),alignSelf:'center'}}>
        <Divider thickness="1.5" _light={{bg: theme.colors.lighBlue }} />
      </View>

      <View style={{ alignItems: 'center',marginTop:10 }}>
        {/* <TouchableOpacity onPress={()=>{
          AsyncStorage.clear()
          .then(() => console.log('AsyncStorage cleared successfully'))
          .catch((err) => console.error(err));
          dispatch(logout(''));
        }} style={styles.pageView}>
          <Image source={loggedData?.isCurrentSidebarPage=='Logout'?images.sdiLogout:images.sdiLogout1} style={styles.iconStyle} />
        </TouchableOpacity> */}
        {/* <Text style={loggedData?.isCurrentSidebarPage=='Logout'?styles.customItemActive:styles.customItem} category='h6'>Logout</Text> */}

        {/* <TouchableOpacity style={styles.pageView} onPress={()=>{
            navigation.navigate('Profile')
          }}>
          <Image source={images.profile1} style={styles.iconStyle} />
          <Text style={styles.customItem}>My Profile</Text>
        </TouchableOpacity> */}
        {
          loggedData?.user?.iPlanId==1?
          <TouchableOpacity style={{...styles.pageView,...currentScreen=='PremiumHome'?{backgroundColor:theme.colors.lighBlue,}:{}}} onPress={()=>{
            navigation.navigate('PremiumHome')
          }}>
          <Image source={currentScreen=='PremiumHome'?images.home1:images.home} style={styles.iconStyle} />
          <Text style={{...styles.customItem,...currentScreen=='PremiumHome'?{color:theme.colors.secondary}:{}}}>Home</Text>
        </TouchableOpacity>:
         <TouchableOpacity style={{...styles.pageView,...currentScreen=='BasicHome'?{backgroundColor:theme.colors.lighBlue,}:{}}} onPress={()=>{
          navigation.navigate('BasicHome')
        }}>
          <Image source={currentScreen=='BasicHome'?images.home1:images.home} style={styles.iconStyle} />
          <Text style={{...styles.customItem,...currentScreen=='BasicHome'?{color:theme.colors.secondary}:{}}}>Home</Text>
        </TouchableOpacity>
        }
        <TouchableOpacity style={{...styles.pageView,...currentScreen=='YogaCategoryList'?{backgroundColor:theme.colors.lighBlue,}:{}}} onPress={()=>{
          navigation.navigate('YogaCategoryList')
        }}>
          <Image source={currentScreen=='YogaCategoryList'?images.yoga1:images.yoga} style={styles.iconStyle} />
          <Text style={{...styles.customItem,...currentScreen=='YogaCategoryList'?{color:theme.colors.secondary}:{}}}>Meditation</Text>
        </TouchableOpacity>
        <TouchableOpacity style={{...styles.pageView,...currentScreen=='MusicCategoryList'?{backgroundColor:theme.colors.lighBlue,}:{}}} onPress={()=>{
          navigation.navigate('MusicCategoryList')
        }}>
          <Image source={currentScreen=='MusicCategoryList'?images.music1:images.music} style={styles.iconStyle} />
          <Text style={{...styles.customItem,...currentScreen=='MusicCategoryList'?{color:theme.colors.secondary}:{}}}>Music</Text>
        </TouchableOpacity>
        <TouchableOpacity style={{...styles.pageView,...currentScreen=='DietList'?{backgroundColor:theme.colors.lighBlue,}:{}}} onPress={()=>{
          navigation.navigate('DietList')
        }}>
          <Image source={currentScreen=='DietList'?images.diet1:images.diet} style={styles.iconStyle} />
          <Text style={{...styles.customItem,...currentScreen=='DietList'?{color:theme.colors.secondary}:{}}}>Diet</Text>
        </TouchableOpacity>
        <TouchableOpacity style={{...styles.pageView,...currentScreen=='ActivityCategoryList'?{backgroundColor:theme.colors.lighBlue,}:{}}} onPress={()=>{
          navigation.navigate('ActivityCategoryList')
        }}>
          <Image source={currentScreen=='ActivityCategoryList'?images.activity1:images.activity} style={styles.iconStyle} />
          <Text style={{...styles.customItem,...currentScreen=='ActivityCategoryList'?{color:theme.colors.secondary}:{}}}>Activity</Text>
        </TouchableOpacity>
        <TouchableOpacity style={{...styles.pageView,...MorePagesListArr.includes(currentScreen)?{backgroundColor:theme.colors.lighBlue,}:{}}} onPress={()=>{
          navigation.navigate('MoreList')
        }}>
          <Image source={MorePagesListArr.includes(currentScreen) || currentScreen=='AboutUs' ?images.more1:images.more} style={styles.iconStyle} />
          <Text style={{...styles.customItem,...MorePagesListArr.includes(currentScreen)?{color:theme.colors.secondary}:{}}}>Know More</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.pageView} onPress={()=>{
          navigation.navigate('ContactUs')
        }}>
          <Image source={currentScreen=='ContactUs'?images.call1:images.call} style={{...styles.iconStyle,width:25,height: 25,}} />
           <Text style={styles.customItem}>Contact Us</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.pageView} onPress={AccountDelete}>
          <Image source={images.accountDelete} style={styles.iconStyle} />
           <Text style={styles.customItem}>Account Delete</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.pageView}
          onPress={() => {
            AsyncStorage.clear()
              .then(() => console.log('AsyncStorage cleared successfully 19'))
              .catch((err) => console.error(err));
            dispatch(logout(''));
          }} >
          <Image source={images.logout1} style={styles.iconStyle} />
          <Text style={styles.customItem}>Logout</Text>
        </TouchableOpacity>
      </View>
      <Image
        source={images.logo3}
        onLoad={onImageLoad}
        style={{ width: widthPercentageToDP('45%'), height: heightPercentageToDP('10%'), position: 'absolute', zIndex: -1,bottom:30,alignSelf:'center' }}
        resizeMode='contain'
      />
      {/* <Image
        source={images.sidebarBaby}
        style={{ width: widthPercentageToDP('25%'), height: heightPercentageToDP('12%'), position: 'absolute', zIndex: -1, bottom: 0, left: 30 }}
      /> */}
    </View>
  )
}

export default CustomSidebar

const styles = StyleSheet.create({
  sideMenuProfileIcon: {
    resizeMode: 'center',
    width: 100,
    height: 100,
    borderRadius: 100 / 2,
    alignSelf: 'center',
  },
  iconStyle: {
    width: 30,
    height: 30,
    marginTop: scale(10)
  },
  customItem: {
    padding: 16,
    flexDirection: 'row',
    alignItems: 'center',
    color: 'black',
    fontSize:14,
    fontWeight:600
  },
  customItemActive: {
    padding: 16,
    flexDirection: 'row',
    alignItems: 'center',
    color: 'black'
  },
  pageView: {
    flexDirection: 'row',
    width: widthPercentageToDP('70%'),
    marginBottom:0,
    paddingHorizontal:10,
    borderRadius:10
  }
})