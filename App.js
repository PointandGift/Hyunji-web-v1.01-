import React from 'react';
import { StyleSheet, View, Image, Text, TextInput, TouchableOpacity } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
        
        
        <View style={styles.container}>
            <View style={styles.gradientContainer}>
                <Image style={styles.gradient} source={require('./images/gradient.png')}
                />
            </View>
                
                
            <View style={styles.logoContainer}>
                <Image style={styles.logo} source={require('./images/logo.png')}
                />
            </View>
                
                                                   
            <View style={styles.formContainer}>
            </View>
            
                
            <View style={styles.container}>
                <TextInput style={styles.input} 
                    placeholder = "         Username"
                    placeholderTextColor = "#FFFFFF"
                />
                        
                <TextInput style={styles.input}
                    placeholder = "         Password"
                    placeholderTextColor = "#FFFFFF"
                />
                
                <TextInput style={styles.input}
                    placeholder = "         Email"
                    placeholderTextColor = "#FFFFFF"
                />
                        
                <Image style={styles.password} source={require('./images/password.png')}
                />     
                                                        
                <TouchableOpacity style={styles.buttonContainer}>
                    <Text style={styles.buttonText}>
                        Sign Up
                    </Text>
                </TouchableOpacity>
                    
                <Image style={styles.username} source={require('./images/username.png')}
                />
                
                <Text style={styles.textOr}> 
                    ─────  Or register with  ─────
                </Text>
                
                <Image style={styles.facebook} source={require('./images/facebook.png')}
                />
                                                       
                <Image style={styles.google} source={require('./images/google.png')}
                />
                                                     
                <Image style={styles.email} source={require('./images/email.png')}
                />
            </View>
        </View>
    );
  }
}


const styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    logoContainer: {
        alignItems: 'center',
        marginTop: -380,
        marginBottom: 60
    },
    gradientContainer: {
        flex: 1,
        alignSelf: 'center',
        justifyContent: 'center',
        marginTop: 410
    },
    container: {
        padding: 20,
    },
    input: {
        height: 40,
        marginBottom: 20,
        borderWidth: 2,
        borderTopColor: 'transparent',
        borderRightColor: 'transparent',
        borderBottomColor: '#FFFFFF',
        borderLeftColor: 'transparent'
    },
    username: {
        marginTop: -250
    },
    password: {
        marginTop: -110
    },
    email: {
        marginTop: -240
    },
    buttonContainer: {
        marginTop: 110,
        paddingVertical: 20,
        backgroundColor: '#FFFFFF',
        borderRadius: 18
    },
    buttonText: {
        textAlign: 'center',
        color: '#d1175b',
        fontSize: 20,
        fontWeight: 'bold'
    },
    signup: {
        fontWeight: 'bold'
    },
    textOr: {
        width: 301,
        marginTop: 260,
        textAlign: 'center',
        color: '#FFFFFF',
        fontSize: 16,
        backgroundColor: 'transparent'
    },
    facebook: {
        marginTop: 20,
        marginLeft: 95
    },
    google: {
        marginTop: -45,
        marginLeft: 165
    }
});